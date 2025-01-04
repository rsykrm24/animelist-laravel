<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginRegisterForm extends Controller
{
    public function RegisterForm(Request $request) {
      $name = $request->input("name");
      $email = $request->input("email");
      $password = $request->input("password");
      User::create([
        "name" => $name, 
        "email" => $email,
        "password" => $password
        ]);
      return redirect("/login");
    }
    
    public function LoginForm(Request $request) {
      $email = $request->input("email");
      $password = $request->input("password");
      if(Auth::attempt(["email" => $email,"password" => $password])) {
        return redirect("/");;
      }
      else {
        return redirect("/login");
      }
    }
}
