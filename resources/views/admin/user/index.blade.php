@extends('layouts.master_backend')
@section('conten')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Users</h4>
                <p class="card-description">ผู้ใช้งานระบบ
                </p>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>E-mail</th>
                                <th>Created_at</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Jacob</td>
                                <td>53275531</td>
                                <td>12 May 2017</td>
                                <td>12 May 2017</td>
                                <td>
                                    <a href="" class="badge badge-success">แก้ไข</a>
                                    <a href="" class="badge badge-danger">ลบ</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection
