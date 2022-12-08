@extends('backend.master')

@section('contents')

    <h1>Create New Category</h1>

    <form action="{{route('category.submit')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="">Enter Category Name:</label>
            <input name="category_name" type="text" class="form-control" placeholder="Enter Category Name">
        </div>
        <div class="form-group">
            <label for="">Select Category Status</label>
            <select name="status" id="" class="form-control">
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>

        </div>

        <div class="form-group">
            <label for="">Enter Category Description:</label>
            <textarea name="description" id="" class="form-control"></textarea>
           </div>

        <button class="btn btn-primary" type="submit">Create</button>
    </form>

@endsection

