@extends('layouts.master')

@section('content')

<div class='col-sm-4'>
  <form method='POST' action='/recipes/edit' role='form'>

    <input type='hidden' value='{{ csrf_token() }}' name='_token'>

    <input type='hidden' value='{{ $recipe->id }}' name='id'>

    <div class='form-group'>
      <label for='title'>Title:</label>
      <input type='text' class='form-control' id='title' name='title' value='{{ $recipe->title }}'>
    </div>

    <div class='form-group'>
      <label for='picture_link'>Picture Link:</label>
      <input type='url' class='form-control' id='picture_link' name='picture_link' value='{{ $recipe->picture_link }}'>
    </div>

    <div class='form-group'>
      <label for='description'>Description:</label>
      <input type='text' class='form-control' id='description' name='description' maxlength='200' value='{{ $recipe->description }}'>
    </div>

    <div class='form-group'>
      <label for='ingredients'>Ingredients:</label>
      <input type='text' class='form-control' id='ingredients' name='ingredients' value='{{ $recipe->ingredients }}'>
    </div>

    <div class='form-group'>
      <label for='instructions'>Instructions:</label>
      <input type='text' class='form-control' id='instructions' name='instructions' value='{{ $recipe->instructions }}'>
    </div>

    <div class='form-group'>
      <label for='tags'>Tags:</label>
      @foreach($tags_for_form as $tag_id => $tag)
      <?php $checked = (in_array($tag['tag_name'],$tags_for_this_recipe)) ? 'CHECKED' : ''?>
      <br><input {{ $checked }} type='checkbox' name='tags[]' value='{{$tag_id}}'> {{ $tag['tag_name'] }}
      @endforeach
    </div>

    <button type='submit' class='btn btn-success'>Save Recipe</button>

  </form>
</div>

@stop
