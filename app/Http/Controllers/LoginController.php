<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        
        return view('login.index', [
            "title" => "Login"
        ]);
        
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);
        // if(Auth::attempt($credentials)){
        //     dd(auth()->user()->is_admin);
        // } else {
        //     dd(false);
        //     }

        // if(auth()->check() && auth()->user()->is_admin==1){
        //     dd(auth()->user()->is_admin);
        //     // dd(auth()->user());
        //     return redirect()->intended('/dashboard.index');
        // } else {
        //     return redirect()->intended('/');
        // }
        // if(auth()->check()){
        //     dd(auth()->user());
        //     return redirect()->intended('/dashboard.index');
        // } else {
        //     return redirect()->intended('/');
        // }

        // if(Auth::attempt($credentials)){
        //     $request->session()->regenerate();

        //     return redirect()->intended('/dashboard');
        //     dd($credentials);
        // }

        if(Auth::attempt($credentials)){
            if(auth()->user()->is_admin == 1){
                return redirect()->intended('/dashboard');
            // arahin ke dashboard
            } else {
                return redirect()->intended('home');
            // arahin ke home
            }
        }
        
   
        return back()->with('loginError','Email or Password is Wrong!');
        
    }

    public function logout(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
        }

        $request->session()->invalidate();
 
        $request->session()->regenerateToken();
     
        return redirect('/home');

    }
}
