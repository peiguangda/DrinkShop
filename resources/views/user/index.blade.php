@extends('layouts.master')

@section('head.title')
	List user
@stop

@section('body.content')
<div class="right_col" role="main">
  <div class="container">
    <h2>List user</h2>
    @if(session('notice'))
      <div class="alert alert-success">
        {{session('notice')}}
      </div>
    @endif  
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Id</th>
          <th>User Name</th>
          <th>Email</th>
          <th>Authority</th>
          <th>Delete</th>
          <th>Edit</th>
        </tr>
      </thead>

      <tbody>
      @foreach($users as $user)
        <tr>
          <td>{{$user->id}}</td>
          <td>{{$user->name}}</td>
          <td>{{$user->email}} </td>
          <td>{{$user->status == 1 ? "admin" : "consumer"}}</td>

          <td><img class="img-rounded" width="20" height="20" src="https://premium.wpmudev.org/blog/wp-content/uploads/2012/08/delete-big.jpg"><a href=" {{route('user.destroy', $user->id)}} ">  Delete</a></td>

          <td><img class="img-rounded" width="20" height="20" src="https://previews.123rf.com/images/dirkercken/dirkercken1403/dirkercken140301407/26969068-Edit-editing-button-or-icon-change-correct-or-add-information-check-info-or-spelling-Stock-Photo.jpg"><a href="{{route('user.edit', $user->id)}}">  Edit</a></td>
          
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
</div>
@stop