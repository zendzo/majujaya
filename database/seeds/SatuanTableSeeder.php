<?php

use Illuminate\Database\Seeder;

use App\Satuan;

class SatuanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$satuan = [
    		['nama' => 'Kilo','symbol' => 'Kg'],
    		['nama' => 'Ton','symbol' => 'Tn'],
    		['nama' => 'Zak','symbol' => 'z'],
    	];
        foreach ($satuan as $key => $value) {
        	$satuan = new Satuan;

        	$satuan->create([
        		'nama' => $value['nama'],
        		'symbol' => $value['symbol']
        	]);
        }

        $this->command->info('Satuan Items Created !');
    }
}
