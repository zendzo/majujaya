<?php

use Illuminate\Database\Seeder;
use App\Gudang;

class WarehouseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Gudang::create([
        	'nama'			=>	'Gudang Utama',
        	'alamat'		=>	'Tanjungpinang',
        	'phone'			=>	'0812129012',
        	'status'		=>	true,
        	'keterangan'	=>	'Nihil'
        ]);

        Gudang::create([
            'nama'          =>  'Gudang Tambahan',
            'alamat'        =>  'Batam',
            'phone'         =>  '0812129012',
            'status'        =>  true,
            'keterangan'    =>  'Nihil'
        ]);

        $this->command->info('Gudang Item Created !');
    }
}
