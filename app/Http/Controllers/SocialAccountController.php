<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SocialAccount;

class SocialAccountController extends Controller
{
    public function settings()
    {
        $socials = SocialAccount::all();
        return view('admin.settings', compact('socials'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'link' => 'required|url',
        ]);

        SocialAccount::create([
            'name' => $request->name,
            'link' => $request->link,
            'platform' => $request->platform,
            'is_active' => true,
        ]);

        return redirect()->back()->with('status', 'social-updated');
    }

    public function update(Request $request, SocialAccount $socialAccount)
    {
        $request->validate([
            'name' => 'required',
            'link' => 'required|url',
        ]);

        $socialAccount->update([
            'name' => $request->name,
            'link' => $request->link,
            'platform' => $request->platform,
            'is_active' => $request->status == 'activated',
        ]);

        return redirect()->back()->with('status', 'social-updated');
    }
}
