<?php

use Illuminate\Database\Seeder;
use App\TruckType;

class TruckTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$types = ['Cargo 25 T','Cargo 8 T','Oil 8 T'];

    	foreach ($types as $type) {
    		$truck = new TruckType;

    		$truck->type = $type;

    		$truck->save();
    	}

    	$this->command->info('Truck Type Created !');
    }
}
