<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderStateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_status')->insert([
            'id'       =>   '1',
            'fullname' =>   'New',
            'languages_id'     =>   '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('order_status')->insert([
            'id'       =>   '1',
            'fullname' =>   'Nuevo',
            'languages_id'     =>   '2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('order_status')->insert([
            'id'       =>   '2',
            'fullname' =>   'Invoiced',
            'languages_id'     =>   '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('order_status')->insert([
            'id'       =>   '2',
            'fullname' =>   'Facturado',
            'languages_id'     =>   '2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('order_status')->insert([
            'id'       =>   '3',
            'fullname' =>   'Send',
            'languages_id'     =>   '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('order_status')->insert([
            'id'       =>   '3',
            'fullname' =>   'Enviado',
            'languages_id'     =>   '2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('order_status')->insert([
            'id'       =>   '4',
            'fullname' =>   'Closed',
            'languages_id'     =>   '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('order_status')->insert([
            'id'       =>   '4',
            'fullname' =>   'Cerrado',
            'languages_id'     =>   '2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
