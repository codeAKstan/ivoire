<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /** Admin Methods **/
    public function index()
    {
        $posts = Post::with('user')->latest()->get();
        return view('admin.news', compact('posts'));
    }

    public function create()
    {
        return view('admin.add-news');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|max:2048',
            'category' => 'required|string',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('posts', 'public');
        }

        Post::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title) . '-' . time(),
            'content' => $request->content,
            'image' => $imagePath,
            'category' => $request->category,
            'user_id' => Auth::id(),
            'is_published' => true,
        ]);

        return redirect()->route('admin.news')->with('success', 'Publication posted successfully');
    }

    public function edit(Post $post)
    {
        return view('admin.edit-news', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|max:2048',
            'category' => 'required|string',
        ]);

        $data = [
            'title' => $request->title,
            'content' => $request->content,
            'category' => $request->category,
        ];

        if ($request->hasFile('image')) {
            if ($post->image) {
                Storage::disk('public')->delete($post->image);
            }
            $data['image'] = $request->file('image')->store('posts', 'public');
        }

        $post->update($data);

        return redirect()->route('admin.news')->with('success', 'Publication updated successfully');
    }

    public function destroy(Post $post)
    {
        if ($post->image) {
            Storage::disk('public')->delete($post->image);
        }
        $post->delete();
        return redirect()->back()->with('success', 'Publication removed');
    }

    /** Public Methods **/
    public function publicIndex(Request $request)
    {
        $query = Post::where('is_published', true)->with('user')->latest();
        
        if ($request->has('category')) {
            $query->where('category', $request->category);
        }

        $posts = $query->get();
        return view('resources_page', compact('posts'));
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)
            ->where('is_published', true)
            ->with(['user', 'comments' => function($query) {
                $query->where('is_approved', true)->with(['user', 'replies' => function($q) {
                    $q->where('is_approved', true)->with('user');
                }]);
            }])->firstOrFail();
            
        return view('post_single', compact('post'));
    }
}
