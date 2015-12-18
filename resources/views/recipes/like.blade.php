@extends('layouts.master')

@section('content')

<h1>My Liked Recipes </h1>
@foreach($recipes as $recipe)
<a href='/recipes/show/{{ $recipe->id }}'>{{ $recipe->title }}</a>

<br>


@endforeach

@stop
