<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transation_types')->insert([
            'id'       =>   '1',
            'fullname' =>   'Bought',
            'languages_id'     =>   '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('transation_types')->insert([
            'id'       =>   '1',
            'fullname' =>   'Comprado',
            'languages_id'     =>   '2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('transation_types')->insert([
            'id'       =>   '2',
            'fullname' =>   'Sold',
            'languages_id'     =>   '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('transation_types')->insert([
            'id'       =>   '2',
            'fullname' =>   'Vendido',
            'languages_id'     =>   '2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('transation_types')->insert([
            'id'       =>   '3',
            'fullname' =>   'Detained',
            'languages_id'     =>   '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('transation_types')->insert([
            'id'       =>   '3',
            'fullname' =>   'Retenido',
            'languages_id'     =>   '2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('transation_types')->insert([
            'id'       =>   '4',
            'fullname' =>   'Excess',
            'languages_id'     =>   '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('transation_types')->insert([
            'id'       =>   '4',
            'fullname' =>   'Sobrante',
            'languages_id'     =>   '2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
