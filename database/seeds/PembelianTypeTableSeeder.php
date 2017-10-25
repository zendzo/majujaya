<?php

use Illuminate\Database\Seeder;
use App\PembelianType;

class PembelianTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PembelianType::create([
        	'type'	=>	'Pembelian Biasa'
        ]);

        $this->command->info('Pembelian type Created !');
    }
}
