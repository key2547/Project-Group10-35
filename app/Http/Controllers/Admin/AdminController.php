<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Service;
use App\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $service = Service::all();
        return view('admin.admin.index',compact('service'))
        ->with('categories',Category::all());
    }
}
