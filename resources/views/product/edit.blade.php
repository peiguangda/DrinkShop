@extends('layouts.master')

@section('head.title')
	Edit!!
@stop

@section('body.content')
<div class="right_col" role="main">
  <div class="container">
  <h2 class="pull-center"><strong>Edit product</strong></h2>
	<form action="{{ route('product.update', $product->id) }}" method="POST">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		  <div class="form-group">
		    <label for="inputsm">Name</label>
		    <input class="form-control input-sm" name="name" type="text" value="{{$product->name}}">
		  </div>

		  <div class="form-group">
		    <label for="inputsm">Price</label>
		    <input class="form-control input-sm" name="price" type="number" value="{{$product->price}}">
		  </div>
		  
		  <div class="form-group">
		    <label for="inputsm">Discount</label>
		    <input class="form-control input-sm" name="discount" type="number" value="{{$product->discount}}">
		  </div>

		  <div class="form-group">
		    <label for="inputsm">Image</label>
		    <input type="file" name="image" accept="image/*">
		  </div>

		  <div class="form-group">
		    <label for="inputsm">Quanity</label>
		    <input class="form-control input-sm" name="quanity" type="number" value="{{$product->quanity}}">
		  </div>

		  <div class="form-group">
		    <label for="inputsm">Detail</label>
		    <input class="form-control input-sm" name="detail" type="text" value="{{$product->detail}}">
		  </div>

		  <div class="form-group">
		    <label for="inputsm">Description</label>
		    <input class="form-control input-sm" name="description" type="text" value="{{$product->description}}">
		  </div>

		  <div class="form-group">
		    <label for="inputsm">Priority</label>
		    <input class="form-control input-sm" name="priority" type="number" value="{{$product->priority}}">
		  </div>

		  <button class="btn-primary" type="submit">
	  	Update
	  </button>	  	
	</form>	
  </div>
</div>
@stop
