@extends('layouts.master')

@section('head.title')
	Create!!
@stop

@section('body.content')
<div class="right_col" role="main">
  <div class="container">
  <h2 class="pull-center"><strong>Add a new user</strong></h2>

  @if(session('notice'))
	<div class="alert alert-success">
       	{{session('notice')}}
    </div>
  @endif
	<form action="{{ route('user.store') }}" method="POST">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		  <div class="form-group">
		    <label for="inputsm">User name</label>
		    <input class="form-control input-sm" name="name" type="text">
		  </div>

		  <div class="form-group">
		    <label for="inputsm">Email</label>
		    <input class="form-control input-sm" name="email" type="email">
		  </div>
		  
		  <div class="form-group">
		    <label for="inputsm">Password</label>
		    <input class="form-control input-sm" name="password" type="password">
		  </div>

		  <div class="form-group">
		    <label for="inputsm">Confirm</label>
		    <input class="form-control input-sm" name="rePassword" type="password">
		  </div>
			
		  <div class="form-group">
		  	<label for="inputsm">	Authority:</label>
            <label class="radio-inline"><input type="radio" name="status" value="1">Admin</label>
            <label class="radio-inline"><input type="radio" name="status" value="0">Customer</label>
		  </div>
		  <button class="btn-primary" type="submit">
	  		Add
	  	  </button>	  	  	
	</form>	
  </div>
</div>
@stop
