<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;


class ProfileController extends Controller
{
    public function index()
    {
        $user = auth()->user(); // Get the currently authenticated user
        return view('pages.profile', compact('user'));
    }
    

    public function update(Request $request)
    {
        $user = auth()->user();
    
        $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|email|max:255|unique:users,email,' . $user->id,
            'birthday' => 'sometimes|nullable|date',
            'about_me' => 'sometimes|nullable|string|max:1000',
            'avatar' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        if ($request->has('name')) {
            $user->name = $request->name;
        }
        if ($request->has('email')) {
            $user->email = $request->email;
        }
        if ($request->has('birthday')) {
            $user->birthday = $request->birthday;
        }
        if ($request->has('about_me')) {
            $user->about_me = $request->about_me;
        }
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $avatarName = $user->id.'_avatar'.time().'.'.$avatar->getClientOriginalExtension();
            $avatarPath = $avatar->storeAs('avatars', $avatarName, 'public');
            $user->avatar = Storage::url($avatarPath);
        }
    
        $user->save();
    
        return redirect()->back()->with('success', 'Profile updated successfully.');
    }

}
