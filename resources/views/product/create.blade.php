@extends('layouts.master')

@section('head.title')
	Create!!
@stop

@section('body.content')
<div class="right_col" role="main">
  <div class="container">
  <h2 class="pull-center"><strong>Add a new product</strong></h2>

  @if(session('notice'))
	<div class="alert alert-success">
       	{{session('notice')}}
    </div>
  @endif
	<form action="{{ route('product.store') }}" method="POST">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		  <div class="form-group">
		    <label for="inputsm">Name</label>
		    <input class="form-control input-sm" name="name" type="text"">
		  </div>

		  <div class="form-group">
		    <label for="inputsm">Price</label>
		    <input class="form-control input-sm" name="price" type="number"">
		  </div>
		  
		  <div class="form-group">
		    <label for="inputsm">Discount</label>
		    <input class="form-control input-sm" name="discount" type="number"">
		  </div>

		  <div class="form-group">
		    <label for="inputsm">Image</label>
		    <input type="file" name="image" accept="image/*">
		  </div>

		  <div class="form-group">
		    <label for="inputsm">Quanity</label>
		    <input class="form-control input-sm" name="quanity" type="number"">
		  </div>

		  <div class="form-group">
		    <label for="inputsm">Detail</label>
		    <input class="form-control input-sm" name="detail" type="text"">
		  </div>

		  <div class="form-group">
		    <label for="inputsm">Description</label>
		    <input class="form-control input-sm" name="description" type="text"">
		  </div>

		  <div class="form-group">
		    <label for="inputsm">Priority</label>
		    <input class="form-control input-sm" name="priority" type="number"">
		  </div>

		  <button class="btn-primary" type="submit">
	  		Add
	  	  </button>	  	
	</form>	
  </div>
</div>
@stop
