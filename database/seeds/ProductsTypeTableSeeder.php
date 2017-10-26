<?php

use Illuminate\Database\Seeder;

use App\ProductType;
use Faker\Factory as Faker;

class ProductsTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create('id_ID');

        $types = ['Sembako','Pecah Belah','Perkakas'];

        foreach ($types as $type) {
            ProductType::create([
            	'nama'	=>	$type,
				'kode'	=>	"KD-".rand(100,200),
				'deskripsi'	=> $faker->sentence,
				'status'	=>	rand(0,1)
            ]);
        }
        $this->command->info('Products Type Created !');
    }
}
