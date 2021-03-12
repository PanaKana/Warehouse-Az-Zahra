@extends('warehouse.index')
@section('content')

<button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModalCenter">Tambah Barang</button>
<br>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Barang</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">...</div>
            <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Save changes</button></div>
        </div>
    </div>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Stok Toko</h6>
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
                        <th>Jumlah Stok Gudang</th>
                        <th>Jumlah Stok Toko</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dataall as $data)
                        <td><b>{{$data->idbarcode}}</b></td>
                        <td><b>{{$data->namabarang}}</b></td>
                        <td><b>{{$data->ukuran}} {{$data->satuan}}</b></td>
                        <td><b>{{$data->nama_jenis}}</b></td>
                        <td><b>{{$data->harga}}</b></td>
                        <td><b>{{$data->jumlahsg}}</b></td>
                        <td><b>{{$data->jumlaht}}</b></td>
                        <td><button class="btn btn-primary" type="button" data-toggle="modal" 
                            data-target="#exampleModalCenter1">Edit
                        </button></td>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Edit Data Barang</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">...</div>
                    <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Save changes</button></div>
                </div>
            </div>
        </div>
    </div>
@endsection