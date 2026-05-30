<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::orderBy('order', 'asc')->get();
        return view('admin.testimonials', compact('testimonials'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'author_name' => 'required|string|max:255',
            'author_title' => 'nullable|string|max:255',
            'quote' => 'required|string',
            'order' => 'nullable|integer',
        ]);

        Testimonial::create([
            'author_name' => $request->author_name,
            'author_title' => $request->author_title,
            'quote' => $request->quote,
            'is_active' => true,
            'order' => $request->order ?? 0,
        ]);

        return redirect()->route('admin.testimonials')->with('success', 'Client Story added successfully');
    }

    public function edit(Testimonial $testimonial)
    {
        return view('admin.edit-testimonial', compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            'author_name' => 'required|string|max:255',
            'author_title' => 'nullable|string|max:255',
            'quote' => 'required|string',
            'order' => 'nullable|integer',
            'is_active' => 'required|boolean',
        ]);

        $testimonial->update([
            'author_name' => $request->author_name,
            'author_title' => $request->author_title,
            'quote' => $request->quote,
            'is_active' => (bool)$request->is_active,
            'order' => $request->order ?? 0,
        ]);

        return redirect()->route('admin.testimonials')->with('success', 'Client Story updated successfully');
    }

    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return redirect()->back()->with('success', 'Client Story deleted successfully');
    }
}
