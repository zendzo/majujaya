<?php

use Illuminate\Database\Seeder;

use App\Product;
use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        $types = ['Roko','Makanan','Obat'];

        foreach ($types as $type) {
            Product::create([
            	'product_type_id'	=>	rand(1,6),
				'nama'	=>	$type,
				'kode'	=>	strtoupper(str_random(5)),
				'deskripsi'	=>	$faker->sentence,
				'status'	=>	rand(0,1),
				'keterangan'	=>	$faker->sentence
            ]);
        }
        $this->command->info('Products Fake Data Created !');
    }
}
