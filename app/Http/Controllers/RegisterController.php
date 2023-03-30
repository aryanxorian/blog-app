<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;

class RegisterController extends Controller
{
    //
    public function create(){
        return view('register.create');
    }
    public function store(){
        // dd(request()->all());
        //create user
       $form_data= request()->validate([
            'name' =>['required','min:3','max:255'],
            'username' =>['required','min:3','max:255',Rule::unique('users','username')],
            'email' =>['required','email','max:255',Rule::unique('users','email')],
            'password'=>['required','min:3','max:255']
        ]);
        $form_data['password']=bcrypt($form_data['password']);
        $user =User::create($form_data);
        //log the user
        auth()->login($user);

        session()->flash('success','Your account has been created.');
        return redirect('/');
    }
}
