<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class RegistrationController extends Controller
{
    public function create(){
        return view('registration.create');
    }

//    when hit the post type
    public function store(){

//        validate the form
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

//        create and save the user
        $user = User::create(request(['name', 'email', 'password']));
//        Post::create(request(['title', 'body']));

//        sign them in.
//        \Auth::login(); //or
        auth()->login($user);

//        redirect to the home page. this is another way to redirect to the homepage.
        return redirect()->home();

    }

}
