<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Pegawai extends Model {

    protected $table ="pegawai";
    protected $fillable=
    [
    'nama_pegawai',
    'tgl_lahir',
    'jenis_kelamin',
    'hire_date',
    'alamat',
    'gaji',
    'no_telp' ];
}

?>