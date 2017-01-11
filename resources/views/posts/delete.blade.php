@extends('layouts.default')


@section('content')

    <h1>Eliminar Post</h1>

    @include('partials.errors')

    <form action="{{ action('PostController@destroy') }}" method="post">
        {{ csrf_field() }}

        {{ method_field('DELETE') }}

        <label for="title">Titulo</label>

        <input class="form-control" type="text" name="title" value="{{ $post->title }}">

        <label for="body">Contenido</label>

        <textarea class="form-control"  id="body" name="body" value="" cols="30" rows="10">{{ $post->body }}</textarea>

        <br>
        <input class="btn btn-delete" type="submit" value="Eliminar">
    </form>

   @stop