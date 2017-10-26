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
        $types = ['Pembelian Biasa','Pembelian Langsung'];

        foreach ($types as $type) {
            PembelianType::create(['type' => $type ]);
        }
        $this->command->info('Pembelian type Created !');
    }
}
