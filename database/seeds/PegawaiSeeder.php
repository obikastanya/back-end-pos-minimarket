<?php

use Illuminate\Database\Seeder;
use App\Pegawai;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     $pegawais= [
        [
            'nama_pegawai'=>'Obi Kastanya',
            'tgl_lahir'=>'1997-05-24',
            'jenis_kelamin'=>'Laki Laki',
            'hire_date'=>'2000-07-12',
            'alamat'=>'Salatiga',
            'gaji'=>4500000,
            'no_telp'=> '06820976274'
        ],
        [
            'nama_pegawai'=>'Dinda',
            'tgl_lahir'=>'1999-07-11',
            'jenis_kelamin'=>'Perempuan',
            'hire_date'=>'2003-06-10',
            'alamat'=>'Jogja',
            'gaji'=>4000000,
            'no_telp'=> '068209748855'
        ],
        [
            'nama_pegawai'=>'Aaron A sanger',
            'tgl_lahir'=>'1999-02-06',
            'jenis_kelamin'=>'Laki Laki',
            'hire_date'=>'2000-07-12',
            'alamat'=>'Solo',
            'gaji'=>4500000,
            'no_telp'=> '92572857290'
        ],
        [
            'nama_pegawai'=>'Billy',
            'tgl_lahir'=>'1999-02-05',
            'jenis_kelamin'=>'Perempuan',
            'hire_date'=>'2004-02-18',
            'alamat'=>'Solo',
            'gaji'=>3500000,
            'no_telp'=> '828629726'
        ],
        [
            'nama_pegawai'=>'Sekar',
            'tgl_lahir'=>'1999-07-11',
            'jenis_kelamin'=>'Perempuan',
            'hire_date'=>'2003-06-10',
            'alamat'=>'Jogja',
            'gaji'=>45000,
            'no_telp'=> '068209748855'
        ]
    ];
foreach($pegawais as $pegawai){
        Pegawai::create($pegawai);
}
    
    }
}
