<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Comment;

class CommentController extends Controller
{
    public function store(Post $post){

        $this->validate(request(), ['body' => 'required|min:3']);

//        Post $post is used to get the id of the post that the comments belongs to

//        method one
//        Comment::create([
//            'body' => request('body'),
//            'post_id' => $post->id
//        ]);

//        method two
        $post->addComments(request('body'));//this is sending the comment body to the Post model


        return back();

    }
}
