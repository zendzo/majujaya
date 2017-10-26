<?php

use Illuminate\Database\Seeder;

use App\Store;

use Faker\Factory as Faker;

class StoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $faker = Faker::create('id_ID');

       $number = range(1,5);

    	foreach (range(0,5) as $index) {
    		Store::create([
    			'nama'		=> $faker->company,
				'alamat'		=> $faker->address,
				'npwp'		=> rand(10000,99999),
				'status'		=> 1,
				'keterangan'		=> $faker->sentence,
				'user_id'		=> $faker->randomDigitNotNull,
    		]);
    	}

    	$this->command->info('Store Fake Data Created!');
    }
}
