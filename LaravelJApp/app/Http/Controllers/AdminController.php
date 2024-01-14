<?php
namespace App\Http\Controllers;

use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all(); // Fetch all users
        return view('auth.adminpanel', ['users' => $users]);
        // Or use compact
        // return view('admin.index', compact('users'));
    }
    public function promoteToAdmin(User $user)
    {
        $user->update(['isAdmin' => true]);
        return redirect()->back()->with('success', 'User promoted to admin successfully');
    }
    public function demoteFromAdmin(User $user)
    {
        $user->update(['isAdmin' => false]);
        return redirect()->back()->with('success', 'User demoted from admin successfully');
    }
    public function destroy(User $user)
    {
        // Optional: Prevent deletion of self or super-admin
        if (auth()->user()->id === $user->id) {
            return redirect()->back()->with('error', 'You cannot delete your own account.');
        }

        $user->delete();
        return redirect()->back()->with('success', 'User deleted successfully');
    }
}
