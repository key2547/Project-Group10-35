@extends('layouts.master_backend')
@section('conten')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Category</h4>
                    <p class="card-description">ประเภทของบริการ
                    </p>
                    <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown"
                        href="{{ route('insert.category') }}">+ Create New Project</a>
                    <div class="table-responsive">
                        @if ($categories->count() > 0)
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>name</th>
                                        <th>Service Count</th>
                                        <th>Created_at</th>
                                        <th>Updated_at</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $category->id }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->service->count() }} รายการ</td>
                                            <td>{{ $category->created_at }}</td>
                                            <td>{{ $category->updated_at }}</td>
                                            <td>
                                                <a href="{{ url('/admin/category/edit/' . $category->id) }}"
                                                    class="badge badge-success">แก้ไข</a>
                                                <a href="{{ url('/admin/category/delete/' . $category->id) }}"
                                                    class="badge badge-danger">ลบ</a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        @else
                            <div class="alert alert-danger">
                                <p>ไม่มีข้อมูลประเภทบริการ</p>
                            </div>

                        @endif
                    </div>
                </div>
            </div>
        </div>

    @endsection
