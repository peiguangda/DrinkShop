@extends('layouts.master')

@section('head.title')
	Edit!!
@stop

@section('body.content')
<div class="right_col" role="main">
  <div class="container">
  <h2 class="pull-center"><strong>Edit user</strong></h2>

  @if(session('notice'))
	<div class="alert alert-success">
        {{session('notice')}}
    </div>
  @endif
	<form action="{{ route('user.update', $user->id) }}" method="POST">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		  <div class="form-group">
		    <label for="inputsm">User name</label>
		    <input class="form-control input-sm" name="user" type="text" value="{{$user->name}}">
		  </div>

		  <div class="form-group">
		    <label for="inputsm">Email</label>
		    <input class="form-control input-sm" name="email" type="email" value="{{$user->email}}" readonly="true">
		  </div>
		  
		  <div class="form-group">
		    <label for="inputsm">Password</label>
		    <input class="form-control input-sm" name="password" type="password" value="{{$user->password}}">
		  </div>

		  <div class="form-group">
		    <label for="inputsm">Re-pass</label>
		    <input class="form-control input-sm" name="rePassword" type="password" value="{{$user->password}}">
		  </div>
			
		  <div class="form-group">
		  	<label for="inputsm">	Authority:</label>
            <label class="radio-inline"><input type="radio" name="status" value="1" @if($user->status == 1) {{"checked"}}@endif>Admin</label>
            <label class="radio-inline"><input type="radio" name="status" value="0" @if($user->status == 0) {{"checked"}}@endif>Customer</label>
		  </div>
		  <button class="btn-primary" type="submit">
	  		Update
	  	  </button>	  	
	</form>	
  </div>
</div>
@stop
