<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
        function index($name){
            return view('product', ['name' => $name]);
        }
}
