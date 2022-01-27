@extends('layouts.master_backend')
@section('conten')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Service</h4>
            <p class="card-description"> เพิ่มรายการบริการ </p>
            <form class="forms-sample" action="{{route('create.service')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="Name">
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                </div>
                

                <div class="form-group">
                    <label for="exampleInputPrice1">Price</label>
                    <input type="text" class="form-control" id="exampleInputPrice1" name="price" placeholder="Price">
                        @error('price')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                </div>
                

                <div class="form-group">
                    <label for="exampleTextarea1">Details</label>
                    <textarea class="form-control" id="exampleTextarea1" name="detail" rows="4"></textarea>
                        @error('detail')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                </div>
                

                <div class="form-group">
                    <label for="exampleSelectGender">Cetegory</label>
                    <select class="form-control" id="exampleSelectGender" name="category" >
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>File upload</label>
                    <input type="file" class="file-upload-default" name="image">
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info"  disabled placeholder="Upload Image">
                        <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                    </div>
                    @error('image')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                </div>
                <button type="submit" class="btn btn-primary mr-2">บันทึกข้อมูล</button>
            </form>
        </div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function() {
        $('#image').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
@endsection
