@extends('layouts.master_backend')
@section('conten')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Service</h4>
                <p class="card-description">รายการบริการนวดแผนไทย
                </p>
                <div class="table-responsive">
                    <table class="table">
                        <thead>

                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Detail</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($service as $services)
                            <tr>
                                <td>{{$services->id}}</td>
                                <td>
                                    <img class="img-fluid" src="{{asset('backend/images/'.$services->image)}}" width="150px" alt="">
                                </td>
                                <td>{{$services->name}}</td>
                                <td>{{$services->category->name}}</td>
                                <td>{{$services->price}}</td>
                                <td>{{$services->detail}}</td>

                                <td>
                                    <a href="{{url('/admin/service/edit/'.$services->id)}}" class="badge badge-success">แก้ไข</a>
                                    <a href="{{url('/admin/service/delete/'.$services->id)}}" class="badge badge-danger">ลบ</a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    @endsection
