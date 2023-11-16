<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Dashboard()
    {
        $data = Product::all();
        return view('welcome',compact('data'));
    }
    public function detail(string $id)
    {
        $data = Product::find($id);
        return view('detail',compact('data'));
    }
    
}
