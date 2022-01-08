@extends('layouts.app')

@section('content')
<div class="container text-center" ><h1>all categories</h1></div>
<div class="container">
  <h2>Bordered Table</h2>
  <p>The .table-bordered class adds borders on all sides of the table and the cells:</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>#ID</th>
        <th>name</th>
        <th>Controller</th>
      </tr>
    </thead>
    <tbody>
    	@foreach($categories as $category)
      <tr>
        <td>{{$category->id}}</td>
        <td>{{$category->name}}</td>
        <td><div class="container">
  <h2>Button Group</h2>
  <p>The .btn-group class creates a button group:</p>
  <div class="btn-group">
    <button type="button" class="btn btn-primary">update</button>
    <button type="button" class="btn btn-danger">delete</button>
  </div>
</div></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection