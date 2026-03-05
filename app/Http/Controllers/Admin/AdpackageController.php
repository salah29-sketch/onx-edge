<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Adpackage;
use Illuminate\Http\Request;

class AdpackageController extends Controller
{
    public function index()
    {
        $adpackages = Adpackage::latest()->paginate(20);
        return view('admin.adpackages.index', compact('adpackages'));
    }

    public function create()
    {
        return view('admin.adpackages.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required','string','max:255'],
            'type' => ['required','in:monthly,custom'],
            'price' => ['nullable','numeric'],
            'price_note' => ['nullable','string','max:255'],
            'features' => ['nullable','string'],
            'subtitle' => ['nullable','string','max:255'],
            'description' => ['nullable','string'],
            'is_featured' => ['nullable','boolean'],
            'sort_order' => ['nullable','integer'],
            'is_active' => ['nullable','boolean'],
        ]);

        // لو features جاية array من form نحولها json
        if (isset($data['features']) && is_array($data['features'])) {
            $data['features'] = array_values(array_filter($data['features']));
        }

        $data['is_featured'] = (bool)($data['is_featured'] ?? false);
        $data['is_active']   = (bool)($data['is_active'] ?? true);
        $data['sort_order']  = (int)($data['sort_order'] ?? 0);

        Adpackage::create($data);

        return redirect()->route('admin.adpackages.index');
    }

    public function edit(Adpackage $adpackage)
    {
        return view('admin.adpackages.edit', compact('adpackage'));
    }

    public function update(Request $request, Adpackage $adpackage)
    {
        $data = $request->validate([
            'name' => ['required','string','max:255'],
            'type' => ['required','in:monthly,custom'],
            'price' => ['nullable','numeric'],
            'price_note' => ['nullable','string','max:255'],
            'features' => ['nullable'],
            'subtitle' => ['nullable','string','max:255'],
            'description' => ['nullable','string'],
            'is_featured' => ['nullable','boolean'],
            'sort_order' => ['nullable','integer'],
            'is_active' => ['nullable','boolean'],
        ]);

        if (isset($data['features']) && is_array($data['features'])) {
            $data['features'] = array_values(array_filter($data['features']));
        }

        $data['is_featured'] = (bool)($data['is_featured'] ?? false);
        $data['is_active']   = (bool)($data['is_active'] ?? true);
        $data['sort_order']  = (int)($data['sort_order'] ?? 0);

        $adpackage->update($data);

        return redirect()->route('admin.adpackages.index');
    }

    public function destroy(Adpackage $adpackage)
    {
        $adpackage->delete();
        return back();
    }
}