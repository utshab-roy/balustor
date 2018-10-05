<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    public function index(){
//    query builder method
//    $tasks = DB::table('tasks')->get();
//    using Eloquent model
        $tasks = Task::all();

        return view('tasks.index', compact('tasks'));
    }

    public function show($id){
        //    query builder method
//    $tasks = DB::table('tasks')->find($id);
//    using Eloquent model
        $tasks = Task::find($id);
//    dd($tasks);

        return view('tasks.show', compact('tasks'));
    }
}
