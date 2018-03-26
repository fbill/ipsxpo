<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShippingTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shipping_types')->insert([
            'fullname' =>   'Autos',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('shipping_types')->insert([
            'fullname' =>   'Contenedor 20\'',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('shipping_types')->insert([
            'fullname' =>   'Contenedor 40\'',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
