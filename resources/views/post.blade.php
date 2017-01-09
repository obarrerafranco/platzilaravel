@extends('layouts.default')

@section('content')
    <h1>{{ $post->name }}</h1>
    <p>
        {{ $post->autor }}
    </p>
@stop