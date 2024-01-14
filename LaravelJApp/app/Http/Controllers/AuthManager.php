<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthManager extends Controller
{
    function login(){
        if (Auth::check()) {
            return redirect(route('latest-news'));
        } 
        return view('auth.login');
    }

    function registration(){
        if (Auth::check()) {
            return redirect(route('login.get'));
        } 
        return view('auth.registration');
    }

    function loginPost(Request $req){
        $req->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
    
        $credentials = $req->only('email', 'password');
        $remember = $req->has('remember');
    
        if (Auth::attempt($credentials, $remember)) {
            // Optionally regenerate session ID
            // $req->session()->regenerate();
    
            return redirect()->intended(route('latest-news'));
        }
    
        return back()->withInput($req->only('email'))->with("error", "Invalid Credentials");
    }

    function registrationPost(Request $req){
        $req ->validate([
            'name' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required']);
    
        $data['name'] = $req->name;
        $data['email'] = $req->email;
        $data['password'] =Hash::make($req->password);
        $user = User::create($data);
            
        if($user){
            return redirect(route('login.get'));
        }else
        {
        return redirect(route('registration.get'))->with("error", "Registration Failed");
        }
    }    

    function logout(){
        Session::flush();
        Auth::logout();
        return redirect(route('login.get'));
    }

}
