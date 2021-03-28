@extends('warehouse.index')
@section('title')
    <!-- Button trigger modal -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4"><button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModal">Input Barang</button>
    <div>
        <button class="btn btn-success" type="button" data-toggle="modal" data-target="#inputexcel">Input Dengan Excel</button>
    </div>
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
                        <input class="form-control" id="exampleFormControlInput1" type="text" id="kodestok" name="kodestok">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama Barang</label>
                        <input class="form-control" id="exampleFormControlInput1" type="text" id="namabarang" name="namabarang">
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6 col-xs-6">
                            <label for="exampleFormControlInput1">Tanggal Expired</label><br>
                            <input type="date" id="expired" name="expired" placeholder="Silahkan Isi Tanggal Expired">
                        </div>
                        <div class="form-group col-md-6 col-xs-6">
                            <label for="exampleFormControlInput1">Jumlah Stok</label><br>
                            <input type="Number" id="jumlah" name="jumlah" placeholder="Silahkan Isi Jumlah Stok">
                        </div>  
                    </div>
                </div>
                <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Tutup</button><button class="btn btn-primary" type="submit">Simpan</button></div>
                </form>
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
        <h6 class="m-0 font-weight-bold text-primary">Daftar Barang Masuk</h6>
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
                        <td><b></b></td>
                        <td><b></b></td>
                        <td><b></b></td>
                        <td><b></b></td>
                        <td><b></b></td>
                        <td><b></b></td>
                        <td><button class="btn btn-warning" type="button">Edit</button></td>
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('script')
<script>
    $(function() {
    console.log( "ready!" );
});
 
</script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

@endsection