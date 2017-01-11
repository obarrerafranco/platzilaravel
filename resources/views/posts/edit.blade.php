@extends('layouts.default')


@section('content')

    <h1>Editar Post</h1>

    @include('partials.errors')

    <form action="{{ route('post_patch_path', $post->id) }}" method="post">
        {{ csrf_field() }}

        <input type="hidden" name="_method" value="patch">

        <label for="title">Titulo</label>

        <input class="form-control" type="text" name="title" value="{{ $post->title }}">

        <label for="body">Contenido</label>

        <textarea class="form-control"  id="body" name="body" value="" cols="30" rows="10">{{ $post->body }}</textarea>

        <br>
        <input class="btn btn-success" type="submit" value="Editar">
    </form>

   @stop