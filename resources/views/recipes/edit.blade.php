@extends('layouts.master')

@section('title')
Edit a Recipe
@stop

@section('content')
<div class='container'>

  <h1>Edit {{ $recipe->title }} recipe </h1>

  @if(count($errors) > 0)

  <div class="alert alert-dismissible alert-danger">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>

  @endif

  <form method='POST' action='/recipes/edit'>
    <input type='hidden' value='{{ csrf_token() }}' name='_token'>
    <input type='hidden' value='{{ $recipe->id }}' name='id'>

    <div class='col-md-4'>
      <div class='form-group'>
        <label for='title'>Title:</label>
        <input type='text' class='form-control' id='title' name='title' value='{{ $recipe->title }}'>
      </div>

      <div class='form-group'>
        <label for='picture_link'>Picture URL:</label>
        <input type='url' class='form-control' id='picture_link' name='picture_link' value='{{ $recipe->picture_link }}'>
      </div>

      <div class='form-group'>
        <label for='description'>Description:</label>
        <input type='text' class='form-control' id='description' name='description' maxlength='200' value='{{ $recipe->description }}'>
      </div>

      <div class='form-group'>
        <label for='ingredients'>Ingredients:</label>
        <textarea class='form-control' rows='5' id='ingredients' name='ingredients'> {{ $recipe->ingredients }} </textarea>
      </div>

      <div class='form-group'>
        <label for='instructions'>Instructions:</label>
        <textarea class='form-control' rows='5' id='instructions' name='instructions'> {{ $recipe->instructions }}
        </textarea>
      </div>
    </div>

    <div class='col-md-2'>
      <div class='form-group'>
        <label for='tags'>Tags:</label>
        @foreach($tags_for_form as $tag_id => $tag)
        <?php $checked = (in_array($tag['tag_name'],$tags_for_this_recipe)) ? 'CHECKED' : ''?>
        <br><input {{ $checked }} type='checkbox' name='tags[]' value='{{$tag_id}}'> {{ $tag['tag_name'] }}
        @endforeach
      </div>

      <button type='submit' class='btn btn-success'>Save Recipe</button>
    </div>
  </form>

  <div class='col-md-4'>
    <img class="img-rounded" src='{{ $recipe->picture_link }}'>
  </div>


</div>


@stop
