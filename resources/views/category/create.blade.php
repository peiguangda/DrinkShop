@extends('layouts.master')

@section('head.title')
	Create!!
@stop

@section('body.content')
<div class="right_col" role="main">
  <div class="container">
  <h2 class="pull-center"><strong>Add a new category</strong></h2>

  @if(session('notice'))
	<div class="alert alert-success">
       	{{session('notice')}}
    </div>
  @endif
	<form action="{{ route('category.store') }}" method="POST">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		  <div class="form-group">
		    <label for="inputsm">Name</label>
		    <input class="form-control input-sm" name="name" type="text"">
		  </div>

		  <div class="form-group">
		    <label for="inputsm">Image</label>
		    <input type="file" name="image" accept="image/*">
		  </div>

		  <button class="btn-primary" type="submit">
	  		Add
	  	  </button>	  	
	</form>	
  </div>
</div>
@stop
