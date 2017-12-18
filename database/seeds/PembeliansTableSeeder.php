<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use App\Pembelian;
use Carbon\Carbon;

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
				'tanggal_po'	=> Date('d/m/Y'),
                'tanggal_remainder' => Date('d/m/Y'),
				'tanggal_kirim'	=> Carbon::now()->addDays(14)->format('m/d/Y'),
				'gudang_id'	=> rand(1,2),
				// 'vendor_id'	=> rand(1,5),
                'keterangan' => 'test',
        	]);
        }

        $this->command->info('Nota Pembelian Fake Data Created');
    }
}
