<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('admin.practice-areas', compact('services'));
    }

    public function create()
    {
        return view('admin.add-practice');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'icon' => 'required',
        ]);

        Service::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'description' => $request->description,
            'icon' => $request->icon,
        ]);

        return redirect()->route('admin.practices')->with('success', 'Service created successfully');
    }

    public function edit(Service $service)
    {
        return view('admin.edit-practice', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'icon' => 'required',
        ]);

        $service->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'description' => $request->description,
            'icon' => $request->icon,
        ]);

        return redirect()->route('admin.practices')->with('success', 'Practice area updated successfully');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('admin.practices')->with('success', 'Practice area deleted successfully');
    }

    public function publicIndex()
    {
        $services = Service::all();
        return view('services', compact('services'));
    }
}
