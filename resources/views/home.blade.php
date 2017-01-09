@extends('layouts.default')

@section('content')

<h1>Estos son nuestros post</h1>

    <ul class="list-unstyled">
    @foreach($posts as $post)

        <li>
            <p class="lead">

                <a href="/post/{{ $post->id }}">{{$post->title}}</a>
            </p>

           autor: {{$post->author->name}}
            <br />
           publicado: {{$post->created_at}}
            <br />

        </li>
    @endforeach
    </ul>
    @stop()