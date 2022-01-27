@extends('layouts.master_backend')
@section('conten')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Booking</h4>
                <p class="card-description"> แก้ไขข้อมูลการจองคิว </p>
                <form class="forms-sample" action="{{ url('/booking/update/'.$edit->id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="name" value="{{ $edit->name }}">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName1">Email</label>
                        <input type="email" class="form-control" id="exampleInputName1" name="email" value="{{ $edit->email }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Phone</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="phone" value="{{ $edit->phone }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Date</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="date" value="{{ $edit->date }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Time</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="time" value="{{ $edit->time }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">People</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="people" value="{{ $edit->people }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Massage</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="massage" value="{{ $edit->massage }}">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Update</button>
                </form>
            </div>
        </div>
    </div>



@endsection
