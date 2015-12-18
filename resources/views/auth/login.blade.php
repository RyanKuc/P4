
@extends('layouts.master')

@section('title')
Log In
@stop

@section('content')
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
<div class='container'>
  <div class='col-sm-4'>
    <legend>Log in</legend>
    <form method="POST" action="/login">
    {!! csrf_field() !!}

    <div class='form-group'>
        <label for='email'>Email:</label>
        <input type="email" name="email">
    </div>

    <div class='form-group'>
        <label for='password'>Password:</label>
        <input type="password" name="password" id="password">
    </div>

    <div class='form-group'>
        <button class='btn btn-success' type="submit">Login</button>
    </div>
</form>
</div>
</div>
@stop
