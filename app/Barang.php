<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Barang extends Model {

    protected $table ="barang";
    protected $fillable= [
        'nama_barang',
        'id_jenis_barang',
        'id_supplier',
        'harga_jual',
        'harga_beli',
        'stock'
    ];
}

?>