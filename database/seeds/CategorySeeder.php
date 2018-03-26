<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'id'       =>   '1',
            'fullname' =>   'Cars',
            'description'     =>   'Every Cars',
            'languages_id'     =>   '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categories')->insert([
            'id'       =>   '1',
            'fullname' =>   'Autos',
            'description'     =>   'Todo tipo de autos a su disposición.',
            'languages_id'     =>   '2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categories')->insert([
            'id'       =>   '2',
            'fullname' =>   'Motorcycle',
            'description'     =>   'Every Motorcycle',
            'languages_id'     =>   '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categories')->insert([
            'id'       =>   '2',
            'fullname' =>   'Motos',
            'description'     =>   'Todo tipo de motos a su disposición.',
            'languages_id'     =>   '2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categories')->insert([
            'id'       =>   '3',
            'fullname' =>   'Trucks',
            'description'     =>   'Every Motorcycle',
            'languages_id'     =>   '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categories')->insert([
            'id'       =>   '3',
            'fullname' =>   'Camiones',
            'description'     =>   '',
            'languages_id'     =>   '2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categories')->insert([
            'id'       =>   '4',
            'fullname' =>   'Machines',
            'description'     =>   'Every Motorcycle',
            'languages_id'     =>   '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categories')->insert([
            'id'       =>   '4',
            'fullname' =>   'Maquinarias',
            'description'     =>   '',
            'languages_id'     =>   '2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categories')->insert([
            'id'       =>   '5',
            'fullname' =>   'Industrial Machinery',
            'description'     =>   'Every',
            'languages_id'     =>   '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categories')->insert([
            'id'       =>   '5',
            'fullname' =>   'Maquinas Industriales',
            'description'     =>   '',
            'languages_id'     =>   '2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categories')->insert([
            'id'       =>   '6',
            'fullname' =>   'Other Equipment',
            'description'     =>   'Every',
            'languages_id'     =>   '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categories')->insert([
            'id'       =>   '6',
            'fullname' =>   'Otras Maquinarias',
            'description'     =>   '',
            'languages_id'     =>   '2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categories')->insert([
            'id'       =>   '7',
            'fullname' =>   'Electronics',
            'description'     =>   'Every',
            'languages_id'     =>   '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categories')->insert([
            'id'       =>   '7',
            'fullname' =>   'Electronicos',
            'description'     =>   '',
            'languages_id'     =>   '2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
