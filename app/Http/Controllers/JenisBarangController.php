<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\JenisBarang;
class JenisBarangController extends Controller {

    public function index() {
        $data= JenisBarang::all();
        return $data;

    }
    public function inputJenisBarang(Request $request){
        $barang = new JenisBarang;
        $barang->nama_jenis_barang= $request->nama_jenis_barang;
        $barang->save();
        return "Data berhasil diinput";
    }
    public function deleteJenisBarang($id){
        $barang = JenisBarang::findOrFail($id);
        $barang->delete();
        return "Berhasil dihapus";
    }
    public function updateJenisBarang(Request $request){
        $barang = JenisBarang::findOrFail($request->id_jenis_barang); 
        $barang->update([
            'nama_jenis_barang'=> $request->nama_jenis_barang
        ]);
        return "Berhasil";
    }
    public function options(){
        $jenis=JenisBarang::select('nama_jenis_barang', 'id')->get();
        return $jenis;
    }
}

?>