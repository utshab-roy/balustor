@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">

        <h1>{{ $post->title }}</h1>

        {{ $post->body }}

        <hr/>

        <div class="comments">
            @foreach($post->comments as $comment)
                <ul class="list-group">
                    <li class="list-group-item">
                        <strong>{{ $comment->created_at->diffForHumans() }}: </strong>
                        {{ $comment->body }}
                    </li>
                </ul>
            @endforeach
        </div>

        {{--Add a comment--}}
        <hr/>

        <div class="card-block">
            
        </div>

    </div>
@endsection