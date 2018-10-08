<?php

namespace App;



class Post extends Model
{
    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function addComments($body){
//        method one
//        Comment::create([
//            'body' => $body,
//            'post_id' => $this->id
//        ]);

//        method two
//        $this->comments()->create(['body' => $body]);//or use the next line
        $this->comments()->create(compact('body'));


    }


}
