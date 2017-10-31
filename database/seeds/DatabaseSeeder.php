<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminSeeder::class);
        $this->call(PembeliansTableSeeder::class);
        $this->call(PenjualansTableSeeder::class);
        $this->call(PembelianTypeTableSeeder::class);
        $this->call(PenjualanTypeTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(ProductsTypeTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(SatuanTableSeeder::class);
        $this->call(StoresTableSeeder::class);
        $this->call(SuppliersTableSeeder::class);
        $this->call(TruckTypeTableSeeder::class);
        $this->call(TrucksTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(VendorTableSeeder::class);
        $this->call(WarehouseTableSeeder::class);
    }
}
