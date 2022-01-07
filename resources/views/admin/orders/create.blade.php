@extends('layouts.app')

@section('content')
<form action="/orders/create" method="POST">
	@csrf
  <div class="container text-center">
  <h2>Create Delivery</h2></div>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="costomer Id" name="costumer_id">
    <input class="input-field" type="text" placeholder="product Id" name="product_id">
     <input class="input-field" type="text" placeholder="num_of_product" name="num_of_product">
      <input class="input-field" type="text" placeholder="date" name="date">
  </div>

  <button type="submit" class="btn">create</button>
</form>
@endsection