@extends('layouts.master')


@section('content')

<div class="col-sm-8">

  <h1>Register</h1>

  <form action="/register" method="POST">
    {{ csrf_field() }}

    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" name="name" id="name">
    </div>

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" name="email" id="email">
    </div>

    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" name="password" id="password">
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Register</button>
    </div>

    @include('layouts.errors')
    
  </form>

</div>

@endsection