<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pegawai;
class PegawaiController extends Controller {

    public function index() {
        $pegawai = new Pegawai;
        $data= Pegawai::all();
        return $data;

    }
    public function inputPegawai(Request $request){
        $pegawai = new Pegawai;
        $pegawai->nama_pegawai=$request->nama_pegawai;
        $pegawai->tgl_lahir=$request->tgl_lahir;
        $pegawai->jenis_kelamin=$request->jenis_kelamin;
        $pegawai->hire_date=$request->hire_date;
        $pegawai->alamat=$request->alamat;
        $pegawai->gaji=$request->gaji;
        $pegawai->no_telp=$request->no_telp;
        $pegawai->save();
        return  response("Data berhasil diinput");
    }
    public function deletepegawai($id){
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->delete();
        return "Berhasil dihapus";
    }
    public function updatePegawai(Request $request){

        $pegawai= Pegawai::FindOrFail( $request->id_pegawai);
        $pegawai->update([
            'nama_pegawai'=>    $request->nama_pegawai,
            'tgl_lahir'=>       $request->tgl_lahir,
            'jenis_kelamin'=>   $request->jenis_kelamin,
            'hire_date'=>       $request->hire_date,
            'alamat'=>          $request->alamat,
            'gaji'=>            $request->gaji,
            'no_telp'=>         $request->no_telp
        ]);
        return "berhasil";

    }
}

?>