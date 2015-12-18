@extends('layouts.master')

@section('content')

<div class="container">
  <div class='jumbotron'>
    <h1> Welcome Back {{ $user->name }} !</h1>
    <p> Lets get started <a href='/recipes/create'>add a new recipe</a> or <a href='/recipes/show'>browse all recipes..</a></p>
  </div>
  <div class='jumbotron'>
    <h2> New Features:</h2>
    <p> 'Like' a post! Members can now 'like' their and other members recipes, view their 'liked' recipes and adjust their list of 'likes' as desired.</p>
  </div>
</div>
@stop
