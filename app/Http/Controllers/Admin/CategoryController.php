<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.category.addservice');
    }

    public function insert(Request $request)
    {
        $validatedData = $request->validate(
            [
                'name' => 'required|unique:categories|max:255',
            ],
            [
                'name.required' => 'กรุณาป้อนข้อมูลประเภทบริการ',
                'name.unique' => 'มีชื่อประเภทบริการนี้อยู่ในฐานข้อมูลแล้ว',
                'name.max' => 'กรอกข้อมูลได้สูงสุด 255 ตัวอักษร'
            ]
        );
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        $notification = array(
            'message' => 'บันทึกข้อมูลเรียบร้อยแล้ว',
            'alert-type' => 'success'
        );
        return redirect()->route('index.category')->with($notification);
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->name;
        $category->update();
        $notification = array(
            'message' => 'แก้ไขข้อมูลเรียบร้อยแล้ว',
            'alert-type' => 'success'
        );
        return redirect()->route('index.category')->with($notification);
    }

    public function delete($id)
    {
        $category = Category::find($id);
        if ($category->service->count() > 0) {
            $notification = array(
                'message' => 'ไม่สามารถลบประเภทบริการได้เนื่องจากมีรายการบริการอยู่',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
        $category->delete();
        $notification = array(
            'message' => 'ลบข้อมูลเรียบร้อยแล้ว',
            'alert-type' => 'success'
        );
        return redirect()->route('index.category')->with($notification);
    }
}
