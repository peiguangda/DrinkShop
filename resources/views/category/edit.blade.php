@extends('layouts.master')

@section('head.title')
	Edit!!
@stop

@section('body.content')
<div class="right_col" role="main">
  <div class="container">
  <h2 class="pull-center"><strong>Edit category</strong></h2>
	<form action="{{ route('category.update', $category->id) }}" method="POST">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		  <div class="form-group">
		    <label for="inputsm">Name</label>
		    <input class="form-control input-sm" name="name" type="text" value="{{$category->name}}">
		  </div>

		  <div class="form-group">
		    <label for="inputsm">Image</label>
		    <input type="file" name="image" accept="image/*">
		  </div>

		  <button class="btn-primary" type="submit">
	  	Update
	  </button>	  	
	</form>	
  </div>
</div>
@stop
