<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Client;
use App\Models\EventPackage;
use App\Models\AdPackage;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        $serviceType = $request->input('service_type', $request->input('booking_type'));

        $selected = $request->input('selected_package');

        $packageType = $request->input('package_type');
        $packageId   = $request->input('package_id');

        if ($selected && (!$packageType || !$packageId)) {
            if (preg_match('/^(event|ad|ads):(\d+)$/', $selected, $m)) {
                $prefix = $m[1];
                $packageId = (int) $m[2];
                $packageType = $prefix === 'event' ? 'event' : 'ads';
            }
        }

        $rules = [
            'service_type' => 'required|in:event,ads',
            'name'  => 'required|string|max:255',
            'phone' => 'required|string|max:30',
            'email' => 'nullable|email|max:255',
            'notes' => 'nullable|string',
        ];

        if ($serviceType === 'event') {
            $rules = array_merge($rules, [
                'event_date' => 'required|date',
                'event_location_id' => 'nullable',
                'custom_event_location' => 'nullable|string|max:255',
            ]);
        }

        if ($serviceType === 'ads') {
            $rules = array_merge($rules, [
                'business_name' => 'nullable|string|max:255',
                'budget' => 'nullable|numeric|min:0',
                'deadline' => 'nullable|date',
            ]);
        }

        $request->merge([
            'service_type' => $serviceType,
        ]);

        $data = $request->validate($rules);

        $data['package_type'] = null;
        $data['package_id']   = null;

        if ($serviceType === 'event' && $packageId && $packageType === 'event') {
            $package = EventPackage::where('is_active', true)->find($packageId);
            if ($package) {
                $data['package_type'] = EventPackage::class;
                $data['package_id']   = $package->id;
            }
        }

        if ($serviceType === 'ads' && $packageId) {
            $package = AdPackage::where('is_active', true)->find($packageId);

            if ($package && in_array($package->type, ['monthly', 'custom'], true)) {
                $data['package_type'] = AdPackage::class;
                $data['package_id']   = $package->id;
            }
        }

        if ($serviceType === 'event') {
            if (($request->input('event_location_id') === 'other') && !$request->filled('custom_event_location')) {
                return back()
                    ->withErrors(['custom_event_location' => 'اكتب مكان الحفل.'])
                    ->withInput();
            }
        }

        if ($serviceType === 'event') {
            $exists = Booking::where([
                ['service_type', 'event'],
                ['event_date', $data['event_date']]
            ])
            ->whereIn('status', ['unconfirmed', 'confirmed', 'in_progress'])
            ->exists();

            if ($exists) {
                return back()->withErrors([
                    'event_date' => 'هذا التاريخ محجوز بالفعل، اختر تاريخًا آخر.',
                ])->withInput();
            }
        }

        $client = Client::where('phone', $data['phone'])
            ->when(!empty($data['email']), function ($query) use ($data) {
                $query->orWhere('email', $data['email']);
            })
            ->first();

        if (!$client) {
            $client = Client::create([
                'name'  => $data['name'],
                'phone' => $data['phone'],
                'email' => $data['email'] ?? null,
            ]);
        } else {
            $client->update([
                'name'  => $data['name'],
                'phone' => $data['phone'],
                'email' => $data['email'] ?? $client->email,
            ]);
        }

        $data['client_id'] = $client->id;

        // جديد = غير مؤكد = برتقالي
        $data['status'] = 'unconfirmed';

        Booking::create($data);

        return redirect()->back()->with(
            'message',
            'تم إرسال طلبك بنجاح ✅ سنتواصل معك قريبًا'
        );
    }
}