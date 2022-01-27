<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Category;
use App\Http\Controllers\Controller;
use App\Service;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('welcome')
        ->with('services',Service::paginate(8))
        ->with('categories',Category::all());
    }

    public function createbooking(Request $request){
        $validatedData = $request->validate(
            [
                'name' => 'required|max:255',
                'email' => 'required|max:255',
                'phone' => 'required|max:255',
                'date' => 'required|max:255',
                'time' => 'required|max:255',
            ],
            [
                'name.required' => 'กรุณาป้อนชื่อผู้จอง',
                'name.max' => 'กรอกข้อมูลได้สูงสุด 255 ตัวอักษร',
                'email.required' => 'กรุณาป้อนอีเมลล์ที่ติดต่อได้ของผู้จอง',
                'email.max' => 'กรอกข้อมูลได้สูงสุด 255 ตัวอักษร',
                'phone.required' => 'กรุณาป้อนเบอร์โทรที่ติดต่อได้ของผู้จอง',
                'phone.max' => 'กรอกข้อมูลได้สูงสุด 255 ตัวอักษร',
                'date.required' => 'กรุณาเลือกวันที่จอง',
                'date.max' => 'กรอกข้อมูลได้สูงสุด 255 ตัวอักษร',
                'time.required' => 'กรุณาเลือกเวลาจอง',
                'time.max' => 'กรอกข้อมูลได้สูงสุด 255 ตัวอักษร',
            ]
        );
        $booking = new Booking();
        $booking->name = $request->name;
        $booking->name = $request->name;
        $booking->name = $request->name;
        $booking->name = $request->name;
        $booking->name = $request->name;
        $booking->email = $request->email;
        $booking->phone = $request->phone;
        $booking->date = $request->date;
        $booking->time = $request->time;
        $booking->people = $request->people;
        $booking->massage = $request->message;
        $booking->save();
        $notification = array(
            'message' => 'คุณได้ทำการจองคิวเรียบร้อยแล้ว',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function indexbooking(){
        $booking = Booking::all();
        return view('admin.booking.index',compact('booking'));
    }

    public function status(Request $request, $id){
        $status = Booking::find($id);
        $status->status = $request->status;
        $status->save();
        $notification = array(
            'message' => 'คุณได้รับคิวเรียบร้อยแล้ว',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function status1(Request $request, $id){
        $status = Booking::find($id);
        $status->status = $request->status1;
        $status->save();
        $notification = array(
            'message' => 'บันทึกข้อมูลเรียบร้อยแล้ว',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function edit($id){
        $edit = Booking::find($id);
        return view('admin.booking.edit',compact('edit'));
    }

    public function update(Request $request,$id){
        $update = Booking::find($id);
        $update->name = $request->name;
        $update->name = $request->name;
        $update->name = $request->name;
        $update->name = $request->name;
        $update->name = $request->name;
        $update->email = $request->email;
        $update->phone = $request->phone;
        $update->date = $request->date;
        $update->time = $request->time;
        $update->people = $request->people;
        $update->massage = $request->massage;
        $update->save();
        $notification = array(
            'message' => 'แก้ไขข้อมูลเรียบร้อยแล้ว',
            'alert-type' => 'success'
        );
        return redirect('booking/index')->with($notification);
    }

    public function delete($id){
        $delete = Booking::find($id);
        $delete->delete();
        $notification = array(
            'message' => 'ลบข้อมูลเรียบร้อยแล้ว',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
