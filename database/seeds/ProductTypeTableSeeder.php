<?php

use Illuminate\Database\Seeder;
use App\ProductType;

class ProductTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductType::create([
        	'nama'	=>	'Product 1',
        	'kode'	=>	'KD-1',
        	'deskripsi'	=>	'nihil',
        	'status'	=>	true,
        ]);

        $this->command->info('Product Kode Created !');
    }
}
