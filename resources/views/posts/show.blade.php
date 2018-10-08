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

        <div class="card card-body">
            <form method="POST" action="/posts/{{ $post->id }}/comments">

                {{ csrf_field()}}

                <div class="form-group">
                    <textarea class="form-control" name="body"  placeholder="Add your comment here..." required></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add comment</button>
                </div>

            </form>

            @include('layouts.errors')
        </div>

    </div>
@endsection