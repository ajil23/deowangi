@extends('admin.admin_master')
@section('admin')

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="h3 mb-2 text-gray-800">Data Produk</h1>
            </div>
            <div class="co text-end mb-2">
                <a href="{{route('produk.add')}}"><button type="button" class="btn btn-primary">Tambah Produk</button></a>
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama Program Studi</th>
                            <th>Jenjang</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>asd</td>
                            <td>hwyw</td>
                            <td>eer</td>
                            <td>asas</td>
                            <td colspan="2">
                                <a href="{{route('produk.edit')}}" class="btn btn-warning"> Edit </a>
                                <a href="#" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table> 
            </div>
        </div>
    </div>
</div>
@endsection
