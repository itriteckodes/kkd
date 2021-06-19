@extends('admin.layout')

@section('title')
    Admin-Products
@endsection

@section('heading')
    Products
@endsection

@section('content')
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Image</th>
        <th scope="col">Category</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Action</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($products as $key=>$product)
      <tr>
        <td>{{$key+1}}</td>
        <td><img src="{{ $product->image }}" height="75" width="50" alt=""></td>
        <td>{{$product->category->name}}</td>
        <td>{{$product->name}}</td>
        <td>{{$product->price}}</td>
        <td><a id="{{ $product->id }}" name="{{ $product->name }}" category="{{ $product->category_id }}" price="{{ $product->price }}" image="{{ $product->image }}"  data-toggle="modal" data-target="#edit-model" class="btn btn-info edit">Edit</a></td>
        <td>
            <form action="{{route('admin.product.destroy',$product->id)}}" method="POST">
              @method('DELETE')
            <button type="submit" class="btn btn-primary">Delete</button>
            </form>
      </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <div id="edit-model" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <form id="myForm" method="POST" enctype="multipart/form-data">
            @method('PUT')

            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                    <div class="form-group">
                        <label for="name">Select Category</label>
                        <select  class="form-control" id="category" name="category_id" required>
                            @foreach (App\Models\Category::all() as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>      
                    
                    <div class="form-group">
                        <label for="name">Product Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Product Name" required>
                    </div>
                    <div class="form-group">
                        <label for="price">Product Price</label>
                        <input type="text" class="form-control" id="price" name="price" placeholder="Enter Product Price" required>
                    </div>
                    <div class="form-group">
                        <label for="image">Product image</label>
                        <input type="file" class="form-control" id="image" name="image">
                        <span class="text-primary">if don't want to change leave empty</span>
                    </div>
                    
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-danger delete-mode">Update</button>
            </div>
        </div>
    </form>

    </div>
</div>
@endsection

@section('scripts')
<script>
    $('body').on('click', '.edit', function(){
    let id = $(this).attr('id');
    let name = $(this).attr('name');
    let price = $(this).attr('price');
    let image = $(this).attr('image');
    let category = $(this).attr('category');
    $('#name').val(name);
    $('#price').val(price);
    $('#category').val(category);
    $('#myForm').attr('action','{{route("admin.product.update",'')}}' + '/' +id);
});

// $('body').on('click', '.deleteBtn', function(){
//     let id = $(this).attr('id');
//     $('#id').val(id);
//     $('#deleteForm').attr('action','{{route('admin.category.destroy','')}}' +'/'+id);
// });
</script>

@endsection