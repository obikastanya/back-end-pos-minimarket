<?php

use Illuminate\Database\Seeder;
use App\Barang;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs=[
            [ 
             "nama_barang"=> "Pulpen",
             "id_jenis_barang"=> '4',
             "id_supplier"=> '5',
             "harga_jual"=> 4000,
             "harga_beli"=> 2000,
             "stock"=> 50
            ],
            [ 
             "nama_barang"=> "Buku",
             "id_jenis_barang"=> '3',
             "id_supplier"=> '3',
             "harga_jual"=> 15000,
             "harga_beli"=> 8000,
             "stock"=> 20
            ],
            [ 
             "nama_barang"=> "UC 100C",
             "id_jenis_barang"=> '4',
             "id_supplier"=> '3',
             "harga_jual"=> 7000,
             "harga_beli"=> 5000,
             "stock"=> 10
            ],
            [ 
             "nama_barang"=> "Charger Xiomy",
             "id_jenis_barang"=> '6',
             "id_supplier"=> '3',
             "harga_jual"=> 45000,
             "harga_beli"=> 30000,
             "stock"=> 5
            ]
         ];
        
        foreach( $barangs as $barang ){
            Barang::create($barang);
        }

    }
}
