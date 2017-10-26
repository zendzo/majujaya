<?php

use Illuminate\Database\Seeder;

use App\Truck;
use Faker\Factory as Faker;

class TrucksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create('id_ID');

        foreach (range(0,5) as $index) {
        	Truck::create([
        		'truck_type_id'	=> rand(1,3),
				'plat'	=> "BP $faker->numerify MJ",
				'tanggal_inspeksi'	=> Date('d/m/Y'),
				'pengemudi'	=> $faker->firstName,
				'status'	=> rand(0,1),
				'keterangan'	=> $faker->sentence
        	]);
        }
        $this->command->info('Truck Fake Data Created !');
    }
}
