@extends('layouts.master')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb mb-4">
            <div class="pull-left">
                <h2> Show Product                    
            <div class="float-end">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
                </h2>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12 mb-3">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $product->product_name }}
            </div>
        </div>
        <div class="col-xs-12 mb-3">
            <div class="form-group">
                <strong>Product Details:</strong>
                {{ $product->description }}
            </div>
        </div>
        <div class="col-xs-12 mb-3">
            <div class="form-group">
                <strong>Price</strong>
                {{ $product->price }}
            </div>
        </div>
        <div class="col-xs-12 mb-3">
            <div class="form-group">
            <strong>Stock</strong>
            {{ $product->prize }}
              
                    @can('stock-create')
                    <a class="btn btn-primary" href="{{ route('stock.create',$product->id) }}">Add stock</a>
                    @endcan
              
                   @can('stock-edit')
                    <a class="btn btn-primary" href="{{ route('stock.edit',$product->id) }}">Edit stock</a>
                  @endcan  
              
            </div>
        </div>
    </div>
@endsection