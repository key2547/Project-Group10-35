@extends('layouts.master_backend')
@section('conten')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Booking</h4>
                    <p class="card-description">รายการจองคิวบริการนวดแผนไทย
                    </p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>

                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>People</th>
                                    <th>Massage</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($booking as $bookings)
                                    <tr>
                                        <td>{{ $bookings->id }}</td>
                                        <td>{{ $bookings->name }}</td>
                                        <td>{{ $bookings->email }}</td>
                                        <td>{{ $bookings->phone }}</td>
                                        <td>{{ $bookings->date }}</td>
                                        <td>{{ $bookings->time }}</td>
                                        <td>{{ $bookings->people }}</td>
                                        <td>{{ $bookings->massage }}</td>
                                        <td>{{ $bookings->status }}</td>

                                        <td>
                                            <form action="{{ url('booking/success/' . $bookings->id) }}" method="post">
                                                @csrf
                                                <input type="submit" class="btn btn-info" name="status" value="รับคิวแล้ว">
                                            </form>
                                            
                                            <div class="mt-1">
                                                <form action="{{ url('booking/successfullry/' . $bookings->id) }}"
                                                    method="post">
                                                    @csrf
                                                    <input type="submit" class="btn btn-success" name="status1"
                                                        value="รับบริการแล้ว">
                                                </form>
                                            </div>
                                            

                                            <div class="mt-1">
                                                <a href="{{ url('booking/edit/' . $bookings->id) }}"
                                                    class="badge badge-primary">แก้ไข</a>
                                                <a href="{{ url('booking/delete/' . $bookings->id) }}"
                                                    class="badge badge-danger">ลบ</a>
                                            </div>
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
