@extends('layouts.app')

@section('content')
<form action="#">
	<div class="container text-center"
  <h2>Create Category</h2></div>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="name" name="usrnm">
  </div>

  <button type="submit" class="btn">create</button>
</form>
@endsection