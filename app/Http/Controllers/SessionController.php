<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    public function destroy(){
        auth()->logout();
        return redirect("/")->with('success','GoodBye!');
    }
    public function create(){
        return view('sessions.create');
    }
    public function store(){
        //validate the request
        $attributes= request()->validate([
            'email' =>['required'],
            'password' => ['required']

        ]);
        //attempt to authenticate and login the user
        
        if(auth()->attempt($attributes)){
            session()->regenerate();
            //redirect with a basic flash message
            return redirect('/')->with('success','Welcome Back!!');
        }
      return back()->withInput()->withErrors(['email' => 'YOur provided credentials could not be verified']);
        
    }
}
