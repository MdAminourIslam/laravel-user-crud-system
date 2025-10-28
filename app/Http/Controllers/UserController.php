<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function showRegisterForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password; 
        $user->save();

        return redirect('/')->with('success', 'User registered successfully!');
    }

    public function showUpdateForm()
    {
        return view('update');
    }

    public function update(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'name' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();
        if ($user) {
            $user->name = $request->name;
            $user->password = $request->password;
            $user->save();
            return redirect('/')->with('success', 'User info updated!');
        } else {
            return redirect('/update')->with('error', 'User not found!');
        }
    }

    public function showUsers() {
        $users = User::all();
        return view('show', compact('users'));
    }

    public function searchForm() {
        return view('search');
    }

    public function searchUser(Request $request) {
        $request->validate([
            'email' => 'required|email'
        ]);
    
        $user = User::where('email', $request->email)->first();
    
        if($user){
            return view('search', compact('user'));
        } else {
            $message = "User not found!";
            return view('search', compact('message'));
        }
    }


    public function searchDelete() {
        return view('delete');
    }


    public function deleteUser(Request $request) {
        $request->validate([
            'email'=> 'required|email'
        ]);

        $user = User::where('email', $request->email)->first();

        if($user) {
            $user->delete();
            $message = "User with email {$request->email} has been deleted successfully!";
        } else {
            $message = "No user found with email {$request->email}.";
        }
        return view('delete', compact('message'));
    }

    // showLogin

    public function loginForm()
    {
        return view('login'); 
    }

    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::where('email', $email)
                    ->where('password', $password)
                    ->first();

        if ($user) {
            session(['user' => $user]);
            return redirect('/')->with('success', 'Login successful!');
        } 
        else {
            return back()->with('error', 'Invalid email or password!');
        }
    }
}
