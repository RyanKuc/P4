@extends('layouts.master')

@section('title')
My Liked Recipes
@stop

@section('content')

<div class="container">
    <h1>My Liked Recipes</h1>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Recipe Title</th>
        <th>Description</th>
        <th>Created</th>
        <th>Updated</th>
      </tr>
    </thead>
    <tbody>
      @foreach($recipes as $recipe)
      <tr>
        <td><a href='/recipes/show/{{ $recipe->id }}'>{{ $recipe->title }}</a></td>
        <td>{{ $recipe->description }}</td>
        <td>{{ $recipe->created_at }}</td>
        <td>{{ $recipe->updated_at }}</td>
      </tr>
        @endforeach
    </tbody>
  </table>
</div>

@stop
