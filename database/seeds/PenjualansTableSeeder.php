<?php

use Illuminate\Database\Seeder;
use App\Penjualan;

use Faker\Factory as Faker;

class PenjualansTableSeeder extends Seeder
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
        	Penjualan::create([
        		'user_id'	=> rand(1,6),
				'kode'	=> strtoupper(str_random(6)),
				'penjualan_type_id'	=> rand(1,3),
				'tanggal_so'	=> $faker->date('m/d/Y','now'),
				'tanggal_kirim'	=> $faker->date('m/d/Y','now'),
                'gudang_id' => rand(1,2),
				'confirmed_by_admin'	=> true,
				// 'vendor_id'	=> rand(1,5),
                'keterangan' => $faker->sentence
        	]);
        }

        $this->command->info('Nota Penjualan Fake Data Created');
    }
}
