<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Carbon\Carbon;

class BookingsCalendarController extends Controller
{
    public function index()
    {
        $eventBookings = Booking::where('service_type', 'event')
            ->whereNotNull('event_date')
            ->whereIn('status', ['unconfirmed', 'confirmed', 'in_progress'])
            ->orderBy('event_date')
            ->get();

        $calendarItems = $eventBookings->map(function ($booking) {
            return [
                'title' => $booking->name . ' - ' . $this->statusLabel($booking->status),
                'start' => Carbon::parse($booking->event_date)->format('Y-m-d'),
                'url'   => route('admin.bookings.show', $booking->id),
                'status'=> $booking->status,
            ];
        });

        return view('admin.bookings.calendar', [
            'calendarItems' => $calendarItems,
        ]);
    }

    protected function statusLabel(string $status): string
    {
        return match ($status) {
            'unconfirmed' => 'غير مؤكد',
            'confirmed' => 'مؤكد',
            'in_progress' => 'قيد التنفيذ',
            'completed' => 'مكتمل',
            'cancelled' => 'ملغى',
            default => $status,
        };
    }
}