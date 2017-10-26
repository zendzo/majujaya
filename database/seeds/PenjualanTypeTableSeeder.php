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

        $types = ['Penjualan Langsung Tunai','Penjualan Biasa','Penjualan Jasa'];

        foreach ($types as $type) {
            PenjualanType::create([
                'type'  => $type
            ]);
        }

        $this->command->info('Type Penjualan Created !');
    }
}
