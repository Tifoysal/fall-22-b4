@extends('backend.master')


@section('contents')

<h1>Products </h1>

<a class="btn btn-primary" href="{{route('product.create')}}">Create Product</a>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Product Name</th>
        <th scope="col">Product image</th>
        <th scope="col">Product Price</th>
        <th scope="col">Product Quantity</th>
        <th scope="col">Category</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>

    @foreach($products as $product)
    <tr>
        <th scope="row">{{$product->id}}</th>
        <td>{{$product->name}}</td>
        <td> <img width="60px" src="{{ url('/uploads/products',$product->image) }}" alt="" srcset=""> </td>
        <td>{{$product->price}}</td>
        <td>{{$product->quantity}}</td>
        <td>{{$product->categoryRelation->name}}</td>
        <td>
            <a href="" class="btn btn-success">View</a>
            <a href="" class="btn btn-info">Edit</a>
            <a href="" class="btn btn-danger">Delete</a>
        </td>
    </tr>
    @endforeach

    </tbody>
</table>

    {{$products->links()}}



@endsection
