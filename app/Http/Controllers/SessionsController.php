<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create(){
        return view('sessions.create');
    }

    public function destroy(){
//        login out
        auth()->logout();
//        redirecting to the homepage.
        return redirect()->home();

    }
}
