<?php

namespace Modules\AccountModule\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

// use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Hash;

class AccountModuleController extends Controller
{
    
    public function register(){
            return view('accountmodule::register');
          }
      
    public function storeUser(Request $request)
        {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);
      
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
           return redirect('home');
        }

    public function login(){
        return view('accountmodule::login');
    }

    public function authenticate(Request $request)
        {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('home');
        }

        return redirect('login')->with('error', 'Oppes! You have entered invalid credentials');
    }

    public function editUserInfor(){
        return view('accountmodule::editUserInfor');
    }

    public function storeEditUserInfor(Request $request){
        User::where('email',Auth::user()->email)
        ->update([
            'name'=>$request->name,
            'phonenumber'=>$request->phonenumber,
            'dateofbirth'=>$request->dateofbirth
        ]);
        Auth::user()->phonenumber = $request->phonenumber;
        Auth::user()->dateofbirth = $request->dateofbirth;
    
        return redirect(route('editUserInfor'))->with('error', 'Oppes! You have entered invalid credentials');
    }

    public function logout(){
        Auth::logout();
        return redirect('login');
    }

    public function home(){
        return view('accountmodule::index');
    }

}
