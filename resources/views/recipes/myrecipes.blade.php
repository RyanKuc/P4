@extends('layouts.master')

@section('title')
My Recipes
@stop

@section('content')

<div class="container">
  <h1>My Recipes</h1>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Recipe Title</th>
        <th>Created</th>
        <th>Updated</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach($recipes as $recipe)

      <tr>
        <td><a href='/recipes/show/{{ $recipe->id }}'>{{ $recipe->title }}</a></td>
        <td>{{ $recipe->created_at }}</td>
        <td>{{ $recipe->updated_at }}</td>
        <td><a href='/recipes/edit/{{ $recipe->id }}'> Edit</a></td>
        <td><a href='/recipes/confirm-delete/{{ $recipe->id }}'> Delete</a></td>
      </tr>
        @endforeach
    </tbody>
  </table>
</div>
@stop
