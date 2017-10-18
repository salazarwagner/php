@extends('layouts.master')

@section('content')
    
     
    <h1>{{ $post->title }} </h1>

    {{ $post->body }}

    <hr>

    <div class="comments">
        @foreach ($post->comments as $comment)
            <li class="list-group-item">
                {{ $comment->body }}
            </li>
        @endforeach
    </div>



@endsection


