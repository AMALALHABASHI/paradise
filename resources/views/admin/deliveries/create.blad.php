@extends('layouts.app')

@section('content')
<form action="#">
  <div class="container text-center"
  <h2>Create Delivery</h2></div>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="costomer Id" name="costumer_id">
     <input class="input-field" type="text" placeholder="order Id" name="orderer_id">
      <input class="input-field" type="text" placeholder="date" name="date">
  </div>

  <button type="submit" class="btn">create</button>
</form>
@endsection