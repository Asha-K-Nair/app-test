@extends('layouts.master')

@section('content')
    <!-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> -->
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="row">
    @foreach ($products as $product) 
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card my-2 shadow-0">
            <a href="#" class="">
                @if($product->image != "")
                <img src="{{asset('storage/'.$product->image)}}" class="card-img-top rounded-2" style="aspect-ratio: 1 / 1">
                @else
                <img src="{{asset('images/download.png')}}" class="card-img-top rounded-2" style="aspect-ratio: 1 / 1">
                @endif
            </a>
            <div class="card-body p-0 pt-2">
                <h5 class="card-title">{{ $product->product_name }}</h5>
                <h6 class="card-title">Rs.{{ $product->price }}</h6>
                <p class="card-text mb-0">{{$product->description }}</p>
                <a class="btn btn-primary btn-sm" href="{{ route('products.show',$product->id) }}">View</a>
                    @if( auth()->user()->hasRole('Customer') )
                    <form action="{{ route('addtocart') }}" method="POST" style="display:inline;">
                    @csrf
                    <input type="hidden" name="productId" class="form-control" value="{{$product->id}}">
                    <button type="submit" class="btn btn-danger btn-sm">Add to Cart</button></td>
                    @endif
            </div>
            </div>
        </div>
        @endforeach
    </div>    

@endsection    

