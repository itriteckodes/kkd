@extends('admin.layout')

@section('title')
Admin-Categories
@endsection

@section('heading')
    Categories
@endsection
@section('content')


<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Add Category</h2>
        </div>
        <div class="card-body">
            <form action="{{route('admin.category.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Category Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Enter Category Name" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-default">Add Category
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Action</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach (App\Models\Category::all() as $key=>$cat)
    <tr>
      <td>{{$key+1}}</td>
      <td>{{$cat->name}}</td>
      <td><a id="{{ $cat->id }}" name="{{ $cat->name }}"  data-toggle="modal" data-target="#edit-model" class="btn btn-info edit">Edit</a></td>
      <td>
          <form action="{{route('admin.category.destroy',$cat->id)}}" method="POST">
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
        <form id="myForm" method="POST">
            @method('PUT')

        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Category Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Category Name" required>
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
    $('#name').val(name);
    $('#myForm').attr('action','{{route("admin.category.update",'')}}' + '/' +id);
});

// $('body').on('click', '.deleteBtn', function(){
//     let id = $(this).attr('id');
//     $('#id').val(id);
//     $('#deleteForm').attr('action','{{route('admin.category.destroy','')}}' +'/'+id);
// });
</script>

@endsection
