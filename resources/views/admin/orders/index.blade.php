@extends('layouts.app')

@section('content')
<div class="container text-center" ><h1>All Orders</h1></div>
<div class="container">
  <h2>Bordered Table</h2>
  <p>The .table-bordered class adds borders on all sides of the table and the cells:</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>#ID</th>
        <th>costumer_id</th>
        <th>product_id</th>
        <th>num_of_product</th>
    	<th>date</th>
    	<th>Controller</th>
      </tr>
    </thead>
    <tbody>
    	@foreach($orders as $order)
      <tr>
        <td>{{$order->id}}</td>
        <td>{{$order->costumer_id}}</td>
         <td>{{$order->product_id}}</td>
        <td>{{$order->num_of_product}}</td>
         <td>{{$order->date}}</td>
       
        <td><div class="container">
  <h2>Button Group</h2>
  <p>The .btn-group class creates a button group:</p>
  <div class="btn-group">
    <button type="button" class="btn btn-primary">update</button>
    <a class="btn btn-primary" href="/orders/edit/{order->id}">update</a>
    <button type="button" class="btn btn-danger">delete</button>
  </div>
</div></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection