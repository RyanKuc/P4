@extends('layouts.master')

@section('content')

<h1> Hello {{ $user->name }} </h1>
<h2> My Recipes: </h2>

@foreach($recipes as $recipe)
  <div>
    <a href='show/{{$recipe->id}}'>{{ $recipe->title }}</a>
    {{--  <img src='{{ $recipe->picture_link }}'> --}}
  </div>
@endforeach

@stop
