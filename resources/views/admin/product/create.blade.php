@extends('admin.layout')

@section('title')
    Product-Add
@endsection
@section('heading')
    Add Product
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Add Product</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="select">Select Category</label>
                        <select name="category_id" id="select" class="form-control" required>
                            <option value="" selected disabled>Select-Category</option>
                            @foreach (App\Models\Category::all() as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Product Name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Enter Name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Product Price</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1"
                            placeholder="Enter price" name="price" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Select Product Image</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image" required>
                    </div>
                    <div class="form-footer pt-4 pt-5 mt-4 border-top">
                        <button type="submit" class="btn btn-primary btn-default">Add Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection