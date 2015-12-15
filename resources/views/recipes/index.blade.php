@extends('layouts.master')

@section('content')
  <h1>All Recipes</h1>

  @foreach($recipes as $recipe)
    <div>
      <a href='show/{{$recipe->id}}'>{{ $recipe->title }}</a>
      {{--  <img src='{{ $recipe->picture_link }}'> --}}
    </div>
  @endforeach


@stop
