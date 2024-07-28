@extends('layouts.master')

@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-danger">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-striped table-hover">
        <tr>
            <th>Name</th>
            <th>Prize</th>
            <th width="280px">Price</th>
            <th>Action</td>
        </tr>
      @foreach ($cartProducts as $products) 
        @foreach($products as $product)
       <tr>
         <td>{{ $product->product_name }}</td>
         <td> {{$product->description }}</td>
         <td>Rs.{{ $product->price }}</td>
         <td><a class="btn btn-primary" href="{{ route('products.show',$product->id) }}">View Product</a>
         @if( auth()->user()->hasRole('Customer') )
         <form action="{{ route('addtocart') }}" method="POST" style="display:inline;">
        @csrf
        <input type="hidden" name="productId" class="form-control" value="{{$product->id}}">
         <button type="submit" class="btn btn-danger">Remove</button></td>
        @endif
        </tr>
        @endforeach
      @endforeach
    </table>

@endsection    

