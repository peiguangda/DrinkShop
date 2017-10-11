@extends('layouts.master')

@section('head.title')
	List product
@stop

@section('body.content')
<div class="right_col" role="main">
  <div class="container">
    <h2>List Product</h2>
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
          <th>Price</th>
          <th>Discount</th>
          <th>Quanity</th>
          <th>Delete</th>
          <th>Edit</th>
          <th>Updated at</th>
        </tr>
      </thead>

      <tbody>
      @foreach($products as $product)
        <tr>
          <td>{{$product->id}}</td>
          <td>{{$product->name}}</td>
          <td>{{$product->price}} <strong>VND</strong></td>
          <td>{{$product->discount}} %</td>
          <td>{{$product->quanity}}</td>

          <td><img class="img-rounded" width="20" height="20" src="https://premium.wpmudev.org/blog/wp-content/uploads/2012/08/delete-big.jpg"><a href=" {{route('product.destroy', $product->id)}} ">  Delete</a></td>

          <td><img class="img-rounded" width="20" height="20" src="https://previews.123rf.com/images/dirkercken/dirkercken1403/dirkercken140301407/26969068-Edit-editing-button-or-icon-change-correct-or-add-information-check-info-or-spelling-Stock-Photo.jpg"><a href="{{route('product.edit', $product->id)}}">  Edit</a></td>
          <td>{{$product->updated_at}}</td>
          
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
</div>
@stop