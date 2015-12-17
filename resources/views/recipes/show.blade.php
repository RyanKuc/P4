@extends('layouts.master')

@section('content')
  <div class='col-md-6'>
    <h1>{{ $recipe->title }}</h1>
    <h2>{{ $recipe->description }}</h2>
    @if($isLiked === 'true')

        <form method='POST' action='/recipes/unlike' role='form'>

          <input type='hidden' value='{{ csrf_token() }}' name='_token'>

          <input type='hidden' value='{{ $recipe->id }}' name='recipe_id'>

            <button type='submit' class='btn btn-info'>UNlike</button>

        </form>
        @if($recipe->user_id === $user)
        <form method='GET' action='/recipes/edit/{{ $recipe->id }}' role='form'>

          <input type='hidden' value='{{ csrf_token() }}' name='_token'>

          <input type='hidden' value='{{ $recipe->id }}' name='recipe_id'>

            <button type='submit' class='btn btn-primary'>Edit</button>
          </form>


          <form method='GET' action='/recipes/confirm-delete/{{ $recipe->id }}' role='form'>

            <input type='hidden' value='{{ csrf_token() }}' name='_token'>

            <input type='hidden' value='{{ $recipe->id }}' name='recipe_id'>

              <button type='submit' class='btn btn-warning'>Delete</button>
            </form>
          @endif

    @else

      <form method='POST' action='/recipes/like' role='form'>

        <input type='hidden' value='{{ csrf_token() }}' name='_token'>

        <input type='hidden' value='{{ $recipe->id }}' name='recipe_id'>

          <button type='submit' class='btn btn-success'>like</button>

      </form>
      @if($recipe->user_id === $user)
      <form method='GET' action='/recipes/edit/{{ $recipe->id }}' role='form'>

        <input type='hidden' value='{{ csrf_token() }}' name='_token'>

        <input type='hidden' value='{{ $recipe->id }}' name='recipe_id'>

          <button type='submit' class='btn btn-primary'>Edit</button>
        </form>
        <form method='GET' action='/recipes/confirm-delete/{{ $recipe->id }}' role='form'>

          <input type='hidden' value='{{ csrf_token() }}' name='_token'>

          <input type='hidden' value='{{ $recipe->id }}' name='recipe_id'>

            <button type='submit' class='btn btn-warning'>Delete</button>
          </form>
        @endif


    @endif
    <br>
    <p>Ingredients: <br>{{ $recipe->ingredients }}</p>
    <p>Instructions: <br>{{ $recipe->instructions }}</p>
    <div>
      Tags:
      @foreach($tags as $tag)
      <br>{{ $tag->tag_name }}
      @endforeach

    </div>
  </div>
  <div class='col-md-6'>
    <img src='{{ $recipe->picture_link }}'>
  </div>

@stop
