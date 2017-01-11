@extends('layouts.default')


@section('content')

    <h1>Crear Post</h1>

    @include('partials.errors')

    <form action="{{ route('post_create_path') }}" method="post">
        {{ csrf_field() }}

        <label for="title">Titulo</label>

        <input class="form-control" type="text" name="title" value="">

        <label for="body">Contenido</label>

        <textarea class="form-control"  id="body" name="body" value="" cols="30" rows="10"></textarea>

        <br>
        <input class="btn btn-success" type="submit" value="Crear">
    </form>

   @stop