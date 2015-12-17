@extends('layouts.master')

@section('content')

<h1> Hello {{ $user->name }} </h1>
<h2> My Recipes: </h2>

@foreach($recipes as $recipe)
  <div>
    <a href='/recipes/show/{{ $recipe->id }}'>{{ $recipe->title }}</a>
    <a href='/recipes/edit/{{ $recipe->id }}'> Edit</a>
    <a href='/recipes/confirm-delete/{{ $recipe->id }}'> Delete</a>
  </div>
@endforeach

@stop
