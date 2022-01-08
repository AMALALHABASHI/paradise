@extends('layouts.app')

@section('content')
<form action="/categories/create" method="POST">
	@csrf
	<div class="container text-center"
  <h2>Update Category</h2></div>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="name" name="category_name">
  </div>

  <button type="submit" class="btn">update</button>
</form>
@endsection