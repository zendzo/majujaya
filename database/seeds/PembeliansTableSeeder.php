<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use App\Pembelian;

class PembeliansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        foreach (range(1,10) as $index) {
        	Pembelian::create([
        		'supplier_id'	=> rand(1,6),
				'kode'	=> strtoupper(str_random(6)),
				'pembelian_type_id'	=> rand(1,2),
				'tanggal_po'	=> $faker->date('m/d/Y','now'),
				'tanggal_kirim'	=> $faker->date('m/d/Y','now'),
				'gudang_id'	=> rand(1,2),
				'vendor_id'	=> rand(1,5),
                'keterangan' => $faker->sentence
        	]);
        }

        $this->command->info('Nota Pembelian Fake Data Created');
    }
}
