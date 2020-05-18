<?php
use App\JenisBarang;
use Illuminate\Database\Seeder;

class JenisBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     $jenisBarang= [
        ['nama_jenis_barang'=>'Alat Tulis'],
        ['nama_jenis_barang'=>'Alat Listrik'],
        ['nama_jenis_barang'=>'Aksesoris'],
        ['nama_jenis_barang'=>'Sembako'],
        ['nama_jenis_barang'=>'Pecah Belah'],
        ['nama_jenis_barang'=>'Mie Instan'],
        ['nama_jenis_barang'=>'Minuman'],
        ['nama_jenis_barang'=>'Makanan'],
        ['nama_jenis_barang'=>'Make Up'],
        ['nama_jenis_barang'=>'Obat']
     ];
     foreach($jenisBarang as $jenis){
        JenisBarang::create($jenis);
        }
    }
}
