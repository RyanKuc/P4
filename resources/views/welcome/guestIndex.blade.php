@extends('layouts.master')

@section('title')
Welcome to Ally-Eats
@stop

@section('content')

<div class="container">
  <div class="jumbotron">
    <h1>Ally-Eats</h1>
    <p>Ally-Eats is an online culinary community where users can share and discover their favorite recipes.</p>
    <p><a href='/login' class="btn btn-primary btn-lg">Login</a>
      <a href='/register' class="btn btn-success btn-lg">Register</a></p>
    </div>
    <div class="jumbotron">
      <h1>Perfect your recipe book</h1>
      <p>Members can edit their previous recipes - so your personal cookbook stays up to date as you fine tune your culinary masterpieces.</p>
    </div>
    <div class="jumbotron">
      <h1>Like what you see?</h1>
      <p>Browse community posts for new ideas and add them to your 'like' list for future reference!</p>
    </div>

  </div>


@stop
