@extends('layouts.master')

@section('content')
  <h1>Edit a Recipe</h1>

  {{ $recipe->title }}
  {{ $recipe->id }}
  <div>
    All Tags:
    @foreach($tags_for_form as $tag_id => $tag)
    <br>{{ $tag['tag_name'] }}
    @endforeach
    <br>
    <br>
    This recipes tags
    @foreach($tags_for_this_recipe as $tag_name)
    <br>{{ $tag_name }}
    @endforeach
  </div>
@stop
