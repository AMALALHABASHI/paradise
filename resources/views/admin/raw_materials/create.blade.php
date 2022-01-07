@extends('layouts.app')

@section('content')
<form action="/rawMaterial/create" method="POST">
	@csrf
  <div class="container text-center">
  <h2>Create Delivery</h2></div>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="price" name="price">
     <input class="input-field" type="text" placeholder="type" name="type">
      
  </div>

  <button type="submit" class="btn">create</button>
</form>
@endsection