@extends('layouts.master')

@section('title')
Add a Recipe
@stop

@section('content')

<div class="container">
  <h1> Add a new recipe </h1>

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

  <form method='POST' action='/recipes/create' role='form'>
    <input type='hidden' value='{{ csrf_token() }}' name='_token'>

    <div class='col-md-4'>

      <div class='form-group'>
        <label for='title'>Title:</label>
        <input type='text' class='form-control' id='title' name='title'>
      </div>

      <div class='form-group'>
        <label for='picture_link'>Picture URL:</label>
        <input type='url' class='form-control' id='picture_link' name='picture_link'>
      </div>

      <div class='form-group'>
        <label for='description'>Description:</label>
        <input type='text' class='form-control' id='description' name='description' maxlength='200'>
      </div>

      <div class='form-group'>
        <label for='ingredients'>Ingredients:</label>
        <textarea class='form-control' rows='5' id='ingredients' name='ingredients'> </textarea>
      </div>

      <div class='form-group'>
        <label for='instructions'>Instructions:</label>
        <textarea class='form-control' rows='5' id='instructions' name='instructions'>
        </textarea>
      </div>
    </div>

    <div class='col-md-4'>
      <div class='form-group'>
        <label for='tags'>Tags:</label>
        @foreach($tags_for_form as $tag_id => $tag)
        <br><input type='checkbox' name='tags[]' value='{{$tag_id}}'> {{ $tag['tag_name'] }}
        @endforeach
      </div>

      <button type='submit' class='btn btn-success'>Submit</button>

    </div>

  </form>

</div>

@stop
