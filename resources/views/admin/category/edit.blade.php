@extends('layouts.master_backend')
@section('conten')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit Category</h4>
            <p class="card-description"> แก้ไขประเภทบริการ </p>
            <form class="forms-sample" action="{{url('/admin/category/update/'.$category->id)}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="text" class="form-control" id="exampleInputName1" name="name" value="{{$category->name}}">
                </div>
                <button type="submit" class="btn btn-primary mr-2">Update</button>
            </form>
        </div>
    </div>
</div>



@endsection
