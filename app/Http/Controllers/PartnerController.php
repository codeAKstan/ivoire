<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Partner;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::all();
        return view('admin.partners', compact('partners'));
    }

    public function create()
    {
        return view('admin.add-partner');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'website' => 'nullable|url',
        ]);

        if ($request->hasFile('logo')) {
            $path = $request->file('logo')->store('partners', 'public');
            
            Partner::create([
                'name' => $request->name,
                'logo' => $path,
                'website' => $request->website,
                'is_active' => true,
            ]);
        }

        return redirect()->route('admin.partners')->with('success', 'Partner added successfully');
    }

    public function edit(Partner $partner)
    {
        return view('admin.edit-partner', compact('partner'));
    }

    public function update(Request $request, Partner $partner)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'website' => 'nullable|url',
        ]);

        $data = [
            'name' => $request->name,
            'website' => $request->website,
            'is_active' => $request->has('is_active') ? $request->is_active : true,
        ];

        if ($request->hasFile('logo')) {
            // Delete old logo
            if ($partner->logo) {
                Storage::disk('public')->delete($partner->logo);
            }
            $data['logo'] = $request->file('logo')->store('partners', 'public');
        }

        $partner->update($data);

        return redirect()->route('admin.partners')->with('success', 'Partner updated successfully');
    }

    public function destroy(Partner $partner)
    {
        if ($partner->logo) {
            Storage::disk('public')->delete($partner->logo);
        }
        $partner->delete();
        return redirect()->back()->with('success', 'Partner deleted successfully');
    }
}
