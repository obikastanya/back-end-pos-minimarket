<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Barang;
class BarangController extends Controller {

    public function index() {
        $barang = new Barang;
        $data= barang::all();
        return $data;

    }
    public function inputBarang(Request $request){
        $barang = new Barang;
        $barang->nama_barang= $request->nama_barang;
        $barang->id_jenis_barang= $request->id_jenis_barang;
        $barang->id_supplier=$request->id_supplier;
        $barang->harga_jual=$request->harga_jual;
        $barang->harga_beli=$request->harga_beli;
        $barang->stock=$request->stock;
        $barang->save();
        return "data berhasil diinput";
    }
    public function deleteBarang($id){
        $barang = Barang::findOrFail($id);
        $barang->delete();
        return "berhasil dihapus";
    }
    public function updateBarang(Request $request){

        $barang = Barang::FindOrFail($request->id);
        $barang->update([
            'nama_barang'=>$request->nama_barang,
            'id_jenis_barang'=> $request->id_jenis_barang,
            'id_supplier'=> $request->id_supplier,
            'harga_jual'=> $request->harga_jual,
            'harga_beli'=> $request->harga_beli,
            'stock'=> $request->stock
        ]);
        return "berhasil";

    }
}

?>