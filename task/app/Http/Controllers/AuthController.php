<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function showLogin()
    {
        return view('Auth.login');
    }

    function showRegister()
    {
        return view('Auth.register');
    }

    function register(Request $request)
    {
      $validator = Validator::make($request->all(), [
          'name' => 'required|string|max:255',
          'email' => 'required|string|email|max:255|unique:users',
          'phone' => 'required|string|max:11',
          'password' => 'required|string|min:4',
      ]);

      if ($validator->fails()) {
          return redirect()->route('register')->withErrors($validator)->withInput();
      }

      $users = new User();
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->phone = $request->input('phone');
        $users->password = bcrypt($request->input('password'));
        $users->save();

        return redirect()->route('login')->with('success', 'Registration successful. Please login.');

    }


   function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('login')->with('error', 'Invalid credentials. Please try again.');
        }
    }

    function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }

}
