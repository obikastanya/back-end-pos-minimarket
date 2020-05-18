<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Supplier;
class SupplierController extends Controller {

    public function index() {
        $data= Supplier::all();
        return $data;
    }

    public function inputSupplier(Request $request){
        $supplier = new Supplier;
        $supplier->nama_supplier=$request->nama_supplier;
        $supplier->alamat=$request->alamat;
        $supplier->no_telp=$request->no_telp;
        $supplier->save();
        return "Data berhasil diinput";
    }
    public function deleteSupplier($id){
        $supplier = Supplier::findOrFail($id);
        $supplier->delete();
        return "Berhasil dihapus";
    }
    public function updateSupplier(Request $request){

        $supplier= Supplier::FindOrFail( $request->id);
        $supplier->update([
            'nama_supplier'=>    $request->nama_supplier,
            'alamat'=>          $request->alamat,
            'no_telp'=>         $request->no_telp
        ]);
        return "berhasil";
    }
    public function options(){
        return Supplier::select('id', 'nama_supplier')->get();
    }
}

?>