@extends('layouts.master')

@section('content')
<h1> Add a new recipe </h1>

  <div class='col-sm-4'>
    <form method='POST' action='/recipes/create' role='form'>
      <input type='hidden' value='{{ csrf_token() }}' name='_token'>


      <div class='form-group'>
        <label for='title'>Title:</label>
        <input type='text' class='form-control' id='title' name='title'>
      </div>

      <div class='form-group'>
        <label for='picture_link'>Picture Link:</label>
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

      <div class='form-group'>
        <label for='tags'>Tags:</label>
        @foreach($tags_for_form as $tag_id => $tag)
          <br><input type='checkbox' name='tags[]' value='{{$tag_id}}'> {{ $tag['tag_name'] }}
        @endforeach
      </div>

      <button type='submit' class='btn btn-success'>Submit</button>

    </form>
</div>

@stop
