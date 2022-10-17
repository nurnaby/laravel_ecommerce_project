<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function index(){
        return view('admin.allProduct');
    }
    public function AddProduct(){
        return view('admin.addProduct');
    }
}