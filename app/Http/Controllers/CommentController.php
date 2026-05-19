<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::with(['post', 'user'])->latest()->get();
        return view('admin.comments', compact('comments'));
    }

    public function store(Request $request, Post $post)
    {
        $request->validate([
            'content' => 'required|string|max:1000',
            'name' => Auth::check() ? 'nullable' : 'required|string|max:255',
            'parent_id' => 'nullable|exists:comments,id',
        ]);

        Comment::create([
            'content' => $request->content,
            'post_id' => $post->id,
            'user_id' => Auth::id(),
            'guest_name' => Auth::check() ? null : $request->name,
            'parent_id' => $request->parent_id,
            'is_approved' => true,
        ]);

        return redirect()->back()->with('success', 'Your comment has been posted.');
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect()->back()->with('success', 'Comment deleted successfully');
    }
}
