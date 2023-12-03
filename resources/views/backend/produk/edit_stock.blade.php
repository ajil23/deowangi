@extends('admin.admin_master')
@section('admin')

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="h3 mb-2 text-gray-800">Edit Stock</h1>
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <div class="card-body">
                    <form method="POST" action="{{route('stock.update', $editProduk->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                          <label for="stock" class="form-label">Stok Produk</label>
                          <input type="number" class="form-control" id="stock" name="stock" value="{{$editProduk->stock}}">
                        </div> 
                        <button type="submit" class="btn btn-success">Submit</button>
                        <button onclick="history.back()" type="button" class="btn btn-danger">Batal</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
