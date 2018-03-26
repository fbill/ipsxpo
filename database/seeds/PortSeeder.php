<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ports')->insert([
            'fullname' =>   'Port Elizabeth, NJ',
            'country'     =>   'EEUU',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('ports')->insert([
            'fullname' =>   'Baltimore,MD',
            'country'     =>   'EEUU',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('ports')->insert([
            'fullname' =>   'Callao',
            'country'     =>   'Perú',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('ports')->insert([
            'fullname' =>   'Iquique',
            'country'     =>   'Chile',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('ports')->insert([
            'fullname' =>   'Caucedo',
            'country'     =>   'Rep Dominicana',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('ports')->insert([
            'fullname' =>   'Miami, FL',
            'country'     =>   'EEUU',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('ports')->insert([
            'fullname' =>   'Santos',
            'country'     =>   'Brasil',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('ports')->insert([
            'fullname' =>   'Buenos Aires',
            'country'     =>   'Argentina',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('ports')->insert([
            'fullname' =>   'Rio de Janeiro',
            'country'     =>   'Brasil',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('ports')->insert([
            'fullname' =>   'Guayaquil',
            'country'     =>   'Ecuador',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('ports')->insert([
            'fullname' =>   'San Antonio',
            'country'     =>   'Chile',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('ports')->insert([
            'fullname' =>   'Manzanillo',
            'country'     =>   'Panama',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('ports')->insert([
            'fullname' =>   'ggfg',
            'country'     =>   'Andorra',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('ports')->insert([
            'fullname' =>   'Miami',
            'country'     =>   'United States',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('ports')->insert([
            'fullname' =>   'Houston',
            'country'     =>   'United States',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('ports')->insert([
            'fullname' =>   'San Francisco du Sul',
            'country'     =>   'Brasil',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('ports')->insert([
            'fullname' =>   'Rio Grade',
            'country'     =>   'Brasil',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('ports')->insert([
            'fullname' =>   'Norfolk',
            'country'     =>   'United States',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('ports')->insert([
            'fullname' =>   'Charleston, SC',
            'country'     =>   'United States',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('ports')->insert([
            'fullname' =>   'Los Angeles, CA',
            'country'     =>   'United States',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('ports')->insert([
            'fullname' =>   'Montevideo',
            'country'     =>   'Uruguay',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('ports')->insert([
            'fullname' =>   'La Guaira',
            'country'     =>   'Venezuela',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('ports')->insert([
            'fullname' =>   'Cartagena',
            'country'     =>   'Colombia',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
