<?php

use Illuminate\Database\Seeder;
use App\Supplier;
class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $suppliers=[
                [
                    'nama_supplier'=> 'Obi Kastanya',
                    'alamat'=>'Salatiga',
                    'no_telp'=>'0931841723' 
                ],
                [
                    'nama_supplier'=>'Indofood',
                    'alamat'=>'Semarang',
                    'no_telp'=>'769827629672' 
                ],
                [
                    'nama_supplier'=>'PT Mayora ',
                    'alamat'=>'Mangga Dua, Jakarta',
                    'no_telp'=>'6829276' 
                ],
                [
                    'nama_supplier'=>'Gelatik',
                    'alamat'=>'Semarang',
                    'no_telp'=>'7872757627' 
                ],
                [
                    'nama_supplier'=>'Sidu',
                    'alamat'=>'Jakarta Selatan',
                    'no_telp'=>'728562042' 
                ],
                [
                    'nama_supplier'=>'PT Mergasari Makmur',
                    'alamat'=>'Bogor, Indonesia',
                    'no_telp'=>'676257194' 
                ]
        ];
        foreach($suppliers as $supplier){
        Supplier::create($supplier);

        }
    }
}
