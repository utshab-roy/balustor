<?php

use App\Task;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', function () {

//    query builder method
//    $tasks = DB::table('tasks')->get();
//    using Eloquent model
    $tasks = Task::all();

//    return $tasks;

    return view('tasks.index', compact('tasks'));
});

Route::get('/tasks/{task}', function ($id) {

//    query builder method
//    $tasks = DB::table('tasks')->find($id);
//    using Eloquent model
    $tasks = Task::find($id);
//    dd($tasks);

    return view('tasks.show', compact('tasks'));
});
