@extends('layouts.master')

@section('title')
    Delete Recipe
@stop


@section('content')

    <h1>Delete Recipe</h1>

    <p>
        Are you sure you want to delete <em>{{$recipe->title}}</em>?
        This action cannot be undone.
    </p>

    <p>
        <a href='/recipes/delete/{{$recipe->id}}'>Delete</a>
    </p>

@stop
