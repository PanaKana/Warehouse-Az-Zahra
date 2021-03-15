<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $stokgudang = DB::table('stokgudang')->sum('jumlahsg');
        $stoktoko   = DB::table('stoktoko')->sum('jumlaht');
        $totalstok  = $stokgudang + $stoktoko;

        // dd($totalstok);

 	 return view('warehouse.dashboard')->with(compact('totalstok', 'stoktoko', 'stokgudang'));
    }

    public function cekstokgudang()
    {
        $datagudang = DB::table('barang')
                     ->join('jenis_barang', 'barang.kategori', '=', 'jenis_barang.id')
                     ->join('stokgudang', 'barang.id', '=', 'stokgudang.idbarcode')
                     ->join('satuan','barang.idsatuan','=','satuan.id')
                     ->get();
        // dd($datagudang);

        return view('warehouse.stockgudang')->with(compact('datagudang'));
    }

    public function cekstoktoko()
    {
        $datatoko = DB::table('barang')
                     ->join('jenis_barang', 'barang.kategori', '=', 'jenis_barang.id')
                     ->join('stoktoko', 'barang.id', '=', 'stoktoko.idbarcode')
                     ->join('satuan','barang.idsatuan','=','satuan.id')
                     ->get();
        // dd($datagudang);

        return view('warehouse.stocktoko')->with(compact('datatoko'));
    }

    public function cekallstok()
    {
        $dataall = DB::table('barang')
                     ->join('jenis_barang', 'barang.kategori', '=', 'jenis_barang.id')
                     ->join('stoktoko', 'barang.id', '=', 'stoktoko.idbarcode')
                     ->join('stokgudang', 'barang.id', '=', 'stokgudang.idbarcode')
                     ->join('satuan','barang.idsatuan','=','satuan.id')
                     ->get();
        // dd($datagudang);

        return view('warehouse.stock')->with(compact('dataall'));
    }

    public function inputstokgudang()
    {
        return view('warehouse.stockgudang');
    }

    public function inputstoktoko()
    {
        return view('warehouse.stocktoko');
    }

    public function cekmutasi()
    {
        return view('warehouse.mutasi');
    }

    public function cekbarangmasuk()
    {
        return view('warehouse.penerimaan');
    }
}
