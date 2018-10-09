<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index(){

        $posts = Post::latest()->get();

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post){

//        one method, $id has to be passed to the function parameter
//        $post = Post::find($id);

//        using Route model binding

        return view('posts.show', compact('post'));
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

        auth()->user()->publish(
            new Post(request(['title', 'body']))
        );



        return redirect('/');
    }


}
