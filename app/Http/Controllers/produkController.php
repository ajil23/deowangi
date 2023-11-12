<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class produkController extends Controller
{
    public function index(){
      return view('backend.produk.view_produk');
    }

    public function create(){
        return view('backend.produk.add_produk');
    }

    public function edit(){
        return view('backend.produk.edit_produk');
     }
}
