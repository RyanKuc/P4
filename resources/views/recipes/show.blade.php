@extends('layouts.master')

@section('content')
  <div class='col-lg-6'>
    <h1>{{ $recipe->title }}</h1>
    <h2>{{ $recipe->description }}</h2>
    <p>Ingredients: <br>{{ $recipe->ingredients }}</p>
    <p>Instructions: <br>{{ $recipe->instructions }}</p>
    <div>
      Tags:
      @foreach($tags as $tag)
      <br>{{ $tag->tag_name }}
      @endforeach
    </div>
  </div>
  <div class='col-lg-6'>
    <img src='{{ $recipe->picture_link }}'>
  </div>

@stop
