@extends('layouts.master')

@section('title')
Recipe Center
@stop

@section('content')
<div class='container'>

  <div class='col-sm-12'>
    <h1>{{ $recipe->title }}</h1>
    <h2>{{ $recipe->description }}</h2>
  </div>
  <div class='col-sm-1'>
    @if($isLiked === 'true')

    <form method='POST' action='/recipes/unlike'>

      <input type='hidden' value='{{ csrf_token() }}' name='_token'>

      <input type='hidden' value='{{ $recipe->id }}' name='recipe_id'>

      <button type='submit' class='btn btn-info'>Un-like</button>

    </form>


    @else

    <form method='POST' action='/recipes/like'>

      <input type='hidden' value='{{ csrf_token() }}' name='_token'>

      <input type='hidden' value='{{ $recipe->id }}' name='recipe_id'>

      <button type='submit' class='btn btn-success'> Like </button>

    </form>

    @endif
    <br>

    @if($recipe->user_id === $user)

    <a href='/recipes/edit/{{ $recipe->id }}' class="btn btn-warning" role="button"> Edit </a>

    <br>
    <br>
    <a href='/recipes/confirm-delete/{{ $recipe->id }}' class="btn btn-primary" role="button">Delete</a>

    @endif

  </div>


  <div class='col-sm-6'>
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Ingredients:</h3>
      </div>
      <div class="panel-body">
        {{ $recipe->ingredients }}
      </div>
    </div>
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Instructions:</h3>
      </div>
      <div class="panel-body">
        {{ $recipe->instructions }}
      </div>
    </div>
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Tags:</h3>
      </div>
      <div class="panel-body">
        @foreach($tags as $tag)
        {{ $tag->tag_name }}<br>
        @endforeach
      </div>
    </div>
  </div>
  <div class='col-sm-4'>
    <img class="img-rounded" src='{{ $recipe->picture_link }}'>
  </div>
  @stop
