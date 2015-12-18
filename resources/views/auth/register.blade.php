<!-- resources/views/auth/register.blade.php -->

@extends('layouts.master')

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
<form method="POST" action="/register" role='form'>
    {!! csrf_field() !!}
  <legend>Register</legend>
    <div class='form-group'>
        <label for='name'>Username:</label>
        <input type="text" name="name" value="{{ old('name') }}">
    </div>

    <div class='form-group'>
        <label for='email'>Email:</label>
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div class='form-group'>
        <label for='password'>Password:</label>
        <input type="password" name="password">
    </div>

    <div class='form-group'>
      <label for='password_confirmation'>Confirm Password:</label>
      <input type="password" name="password_confirmation">
    </div>

    <div class='form-group'>
        <button class='btn btn-success' type="submit">Register</button>
    </div>
</form>
</div>
</div>
@stop
