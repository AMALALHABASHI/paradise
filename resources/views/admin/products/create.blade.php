@extends('layouts.app')

@section('content')
<form action="/products/create" method="POST">
	<div class="container text-center"
  <h2>Create Product</h2></div>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="name" name="product_name">
    <input class="input-field" type="text" placeholder="description" name="description">
    <input class="input-field" type="text" placeholder="price" name="price">
    <input class="input-field" type="text" placeholder="is_sale" name="is_sale">
    <input class="input-field" type="text" placeholder="sales" name="sales">
    <input class="input-field" type="text" placeholder="size" name="size">
    <input class="input-field" type="text" placeholder="color" name="color">
    <input class="input-field" type="text" placeholder="img" name="img">
    <input class="input-field" type="text" placeholder="category_id" name="category_id">
    <input class="input-field" type="text" placeholder="material_id" name="material_id">
    

  </div>

  <button type="submit" class="btn">create</button>
</form>
@endsection