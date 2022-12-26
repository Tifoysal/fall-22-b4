@extends('backend.master')


@section('contents')

<h1>Category List</h1>

<a href="{{route('category.create.form')}}" class="btn btn-success">Create New Category</a>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
        </thead>
        <tbody>

        @foreach($categories as $key=>$category)
        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$category->name}}</td>
            <td>{{$category->description}}</td>
            <td>{{$category->status}}</td>
        </tr>
        @endforeach

        </tbody>
    </table>

@endsection
