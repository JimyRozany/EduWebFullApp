<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\RegisterUserRequest;

class AuthController extends Controller
{
    public function register(RegisterUserRequest $request){
      
        $user =  User::create([
            "name" => $request->name ,
            "email" => $request->email ,
            "password" => bcrypt($request->password) ,

        ]);


        // TODO:soite alert success
        return view("pages.home");
    
    }
    public function login(LoginUserRequest $request){

        // Attempt to authenticate the user
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication passed, redirect to the intended route or home

          
            return redirect()->to('/');
        }

        // Authentication failed, redirect back with input and an error message
        return back()->withInput($request->only('email'))->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    public function logout(Request $request){
        Auth::logout();
        return redirect('/');
    }
}
