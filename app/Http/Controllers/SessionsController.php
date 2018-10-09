<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']); //->except(['destroy'])
    }

    public function create(){
        return view('sessions.create');
    }

    // login process
    public function store()
    {
        //attempt to auth the user.
        //attempt() method checks the logic of login and sign in the user.

//        dd(request([ 'email', 'password' ]));

        if (! auth()->attempt(request(['email', 'password']))){
//            dd('im tring');
//            redirecting back with some error.
            return back()->withErrors([
                'message' => 'Please check your credentials and try again.'
            ]);
        }

        //user is logged in
        return redirect()->home();

    }

    public function destroy(){
//        login out
        auth()->logout();

//        dd('sdfsdf');
//        redirecting to the homepage.
        return redirect()->home();

    }
}
