<?php

use Illuminate\Database\Seeder;
use App\PenjualanType;

class PenjualanTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PenjualanType::create([
        	[
        		'type'	=>	'Penjualan Langsung Tunai'
        	],
        	[
        		'type'	=>	'Penjualan Biasa'
        	],
        	[
        		'type'	=> 'Penjualan Jasa'
        	]
        ]);

        $this->command->info('Type Penjualan Created !');
    }
}
