@extends('layouts.app')

@section('content')
<form action="/products/create" method="POST">
	<div class="container text-center"
  <h2>Create Product</h2></div>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="name" name="product_name">
  </div>

  <button type="submit" class="btn">create</button>
</form>
@endsection