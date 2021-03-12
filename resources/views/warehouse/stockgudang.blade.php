@extends('warehouse.index')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Stok Gudang</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Barcode</th>
                        <th>Nama Barang</th>
                        <th>Ukuran</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Jumlah Stok</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datagudang as $data)
                        <td><b>{{$data->idbarcode}}</b></td>
                        <td><b>{{$data->namabarang}}</b></td>
                        <td><b>{{$data->ukuran}} {{$data->satuan}}</b></td>
                        <td><b>{{$data->nama_jenis}}</b></td>
                        <td><b>{{$data->harga}}</b></td>
                        <td><b>{{$data->jumlahsg}}</b></td>
                        <td><button class="btn btn-warning" type="button">Edit</button></td>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection