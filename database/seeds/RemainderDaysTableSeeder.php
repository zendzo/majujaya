<?php

use Illuminate\Database\Seeder;
use App\RemainderDay;

class RemainderDaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RemainderDay::create([
        	'max_days' => 5
        ]);
    }
}
