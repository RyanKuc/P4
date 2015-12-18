@extends('layouts.master')

@section('title')
    Delete Recipe
@stop

@section('content')
@if(count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
<div class='container'>
    <h1>Delete Recipe</h1>

    <p>
        Are you sure you want to delete <em>{{$recipe->title}}</em>?
        This action cannot be undone.
    </p>

    <p>
        <a href='/recipes/delete/{{$recipe->id}}'>Delete</a>
    </p>
</div>
@stop
