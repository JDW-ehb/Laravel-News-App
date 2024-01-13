<?php
namespace App\Http\Controllers;

use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all(); // Fetch all users
        return view('admin.index', ['users' => $users]);
        // Or use compact
        // return view('admin.index', compact('users'));
    }
}