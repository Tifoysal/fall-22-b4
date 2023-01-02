@extends('backend.master')

@section('contents')

    @if(session()->has('message'))
    <p class="alert alert-success">
        {{session()->get('message')}}
    </p>
    @endif

    <form action="{{route('product.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Enter Product Name:</label>
            <input name="product_name" type="text" class="form-control" id="name" placeholder="Enter product name">
           </div>

        <div class="form-group">
            <label for="price">Enter Product Price:</label>
            <input name="price" type="number" class="form-control" id="price" placeholder="Enter product price">
        </div>

        <div class="form-group">
            <label for="price">Enter Product Details:</label>
            <textarea name="details" id="" class="form-control" placeholder="Enter details"></textarea>
        </div>

        <div class="form-group">
            <label for="qty">Enter Product Quantity:</label>
            <input name="quantity" type="number" class="form-control" id="qty" placeholder="Enter product qty">
        </div>

        <div class="form-group">
            <label for="price">Select Product Category:</label>
            <select name="category_id" id="" class="form-control form-select">
                @foreach($categories as $cat)
                <option value="{{$cat->id}}">{{$cat->name}}</option>
                @endforeach
            </select>
          </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>



@endsection
