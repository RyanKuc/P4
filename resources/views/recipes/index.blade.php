@extends('layouts.master')

@section('content')

  <div class="container">
      <h1>All Recipes</h1>
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
