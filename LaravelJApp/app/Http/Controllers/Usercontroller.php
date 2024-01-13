<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Other user-related methods...

    public function promoteToAdmin(User $user)
{
    $user->update(['isAdmin' => true]);
    return redirect()->back()->with('success', 'User promoted to admin successfully');
}

}
