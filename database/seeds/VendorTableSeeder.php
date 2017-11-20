<?php

use Illuminate\Database\Seeder;
use App\Vendor;

use Faker\Factory as Faker;

class VendorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    // 	$faker = Faker::create('id_ID');

    // 	foreach (range(0,5) as $index) {
    // 		Vendor::create([
    // 			'nama'		=> $faker->company,
				// 'alamat'		=> $faker->address,
				// 'phone'		=> $faker->phoneNumber,
				// 'npwp'		=> rand(10000,99999),
				// 'status'		=> rand(0,1),
				// 'keterangan'		=> $faker->sentence
    // 		]);
    // 	}

    // 	$this->command->info('Vendor Fake Data Created!');
    }
}
