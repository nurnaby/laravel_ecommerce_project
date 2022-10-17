<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function index(){
        return view('admin.allCategory');
    }
    public function AddCategory(){
        return view('admin.addCategory');
    }
}