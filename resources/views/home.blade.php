@extends('layouts.default')

@section('content')

<h1>Estos son nuestros post</h1>

    <ul>
    @foreach($posts as $post)

        <li>
            <a href="/post/{{ $post->id }}">{{$post->name}}</a>
            {{$post->name}} - {{$post->author->name}}

        </li>
    @endforeach
    </ul>
    @stop()