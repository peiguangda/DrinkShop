@extends('layouts.master')

@section('head.title')
	List category
@stop

@section('body.content')
<div class="right_col" role="main">
  <div class="container">
    <h2>List Category</h2>
    @if(session('notice'))
      <div class="alert alert-success">
        {{session('notice')}}
      </div>
    @endif  
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Delete</th>
          <th>Edit</th>
          <th>Updated at</th>
        </tr>
      </thead>

      <tbody>
      @foreach($categories as $category)
        <tr>
          <td>{{$category->id}}</td>
          <td>{{$category->name}}</td>

          <td><img class="img-rounded" width="20" height="20" src="https://premium.wpmudev.org/blog/wp-content/uploads/2012/08/delete-big.jpg"><a href=" {{route('category.destroy', $category->id)}} ">  Delete</a></td>

          <td><img class="img-rounded" width="20" height="20" src="https://previews.123rf.com/images/dirkercken/dirkercken1403/dirkercken140301407/26969068-Edit-editing-button-or-icon-change-correct-or-add-information-check-info-or-spelling-Stock-Photo.jpg"><a href="{{route('category.edit', $category->id)}}">  Edit</a></td>
          <td>{{$category->updated_at}}</td>
          
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
</div>
@stop