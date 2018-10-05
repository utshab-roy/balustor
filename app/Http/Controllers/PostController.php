<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{
    public function index(){
        return view('posts.index');
    }

    public function show(){
        return view('posts.show');
    }

    public function create(){
        return view('posts.create');
    }

    public function store()
    {
//        dd(request()->all());
//        first method
//        $post = new Post;
//        $post->title = request('title');
//        $post->body = request('body');
//
//        $post->save();

//      second method
//        Post::create([
//            'title' => request('title'),
//            'body' => request('body')
//        ]);
//        third method


        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);

        Post::create(request(['title', 'body']));

        return redirect('/');
    }
}
