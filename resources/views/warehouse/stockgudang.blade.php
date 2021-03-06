@extends('warehouse.index')
@section('title')
</div>

<!-- Modal Atas -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Input Stok Gudang</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Kode Stok</label>
                        <input class="form-control" id="exampleFormControlInput1" type="email" id="kodestok" name="kodestok">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama Barang</label>
                        <input class="form-control" id="exampleFormControlInput1" type="email" id="kodestok" name="kodestok">
                    </div>
                </form>
            </div>
            <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Save changes</button></div>
        </div>
    </div>
</div>

<!-- Modal Bawah -->
<div class="modal fade" id="inputexcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Input Dengan Excel</h5>
                <button class="close" type="button" data-dismiss="inputexcel" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group">
                        <label>Upload Excel</label><br>
                        <input type="file">
                    </div>
                </form>
            </div>
            <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Save changes</button></div>
        </div>
    </div>
</div>

@endsection
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

@section('script')
@endsection