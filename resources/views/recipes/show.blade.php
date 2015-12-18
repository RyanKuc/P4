@extends('layouts.master')

@section('content')
<div class='container'>

  <div class='col-sm-12'>
    <h1>{{ $recipe->title }}</h1>
    <h2>{{ $recipe->description }}</h2>
</div>
<div class='col-sm-2'>
<br>
<br>
    @if($isLiked === 'true')

        <form method='POST' action='/recipes/unlike' role='form'>

          <input type='hidden' value='{{ csrf_token() }}' name='_token'>

          <input type='hidden' value='{{ $recipe->id }}' name='recipe_id'>

            <button type='submit' class='btn btn-info'>Un-like</button>

        </form>


    @else

      <form method='POST' action='/recipes/like' role='form'>

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


<div class='col-sm-4'>
    <h3>Ingredients: </h3><p>{{ $recipe->ingredients }}</p>
    <h3>Instructions: </h3><p>{{ $recipe->instructions }}</p>
      <h3>Tags:</h3>
      @foreach($tags as $tag)
      {{ $tag->tag_name }}<br>
      @endforeach
</div>
  <div class='col-sm-5'>
    <br>
    <img class="img-rounded" height="300px" width='auto' src='{{ $recipe->picture_link }}'>
</div>
@stop
