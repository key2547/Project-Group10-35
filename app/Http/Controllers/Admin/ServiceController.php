<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Service;
use Illuminate\Support\Str;
use Image;
use File;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware("VerifyIsCategory")->only(['index','create']);
    }
    public function index()
    {
        return view('admin.service.index')->with('categories', Category::all());
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate(
            [
                'name' => 'required|max:255',
                'price' => 'required|max:255',
                'detail' => 'required',
                'image' => 'mimes:jpeg,jpg,png,gif|file|max:12040',
            ],
            [
                'name.required' => 'กรุณาป้อนข้อมูลชื่อบริการ',
                'name.max' => 'กรอกข้อมูลได้สูงสุด 255 ตัวอักษร',
                'price.required' => 'กรุณาป้อนข้อมูลราคา',
                'price.max' => 'กรอกข้อมูลได้สูงสุด 255 ตัวอักษร',
                'detail.required' => 'กรุณาป้อนข้อมูลรายละเอียดการบริการ',
                'image.mimes' => 'กรุณาอัพโหลดภาพนามสกุล jpeg,jpg,png,gif เท่านั้น',
                'image.file' => 'อัพโหลดได้เฉพาะไฟล์ภาพ',
                'image.max' => 'อัพโหลดขนาดไม่เกิน 10MB',
            ]
        );
        $service = new Service();
        $service->name = $request->name;
        $service->detail = $request->detail;
        $service->price = $request->price;
        $service->category_id = $request->category;

        if ($request->hasFile('image')) {
            $filemane = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/backend/images/', $filemane);
            Image::make(public_path() . '/backend/images/' . $filemane);
            $service->image = $filemane;
        } else {
            $service->image = 'NOPIC.jpg';
        }

        $service->save();
        $notification = array(
            'message' => 'บันทึกข้อมูลเรียบร้อยแล้ว',
            'alert-type' => 'success'
        );
        return redirect()->route('index.admin')->with($notification);
    }

    public function edit($id)
    {
        $service = Service::find($id);
        return view('admin.service.edit', compact('service'))
            ->with('categories', Category::all());
    }

    public function update(Request $request, $id)
    {

        if ($request->hasFile('image')) {
            $service = Service::find($id);
            if ($service->image != 'NOPIC.jpg') {
                File::delete(public_path() . '/backend/images/' . $service->image);
            }
            $filemane = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/backend/images/', $filemane);
            Image::make(public_path() . '/backend/images/' . $filemane);
            $service->image = $filemane;
            $service->name = $request->name;
            $service->detail = $request->detail;
            $service->price = $request->price;
            $service->category_id = $request->category;
        } else {
            $service = Service::find($id);
            $service->name = $request->name;
            $service->detail = $request->detail;
            $service->price = $request->price;
            $service->category_id = $request->category;
        }

        $service->save();
        $notification = array(
            'message' => 'แก้ไขข้อมูลเรียบร้อยแล้ว',
            'alert-type' => 'success'
        );
        return redirect()->route('index.admin')->with($notification);
    }

    public function delete($id)
    {
        $delete = Service::find($id);
        if ($delete->image != 'NOPIC.jpg') {
            File::delete(public_path() . '/backend/images/' . $delete->image);
        }
        $delete->delete();
        $notification = array(
            'message' => 'ลบข้อมูลเรียบร้อยแล้ว',
            'alert-type' => 'success'
        );
        return redirect()->route('index.admin')->with($notification);
    }
}
