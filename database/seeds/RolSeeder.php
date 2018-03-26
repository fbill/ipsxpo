<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'fullname' =>   'Quotations',
            'type'     =>   'Employee',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('roles')->insert([
            'fullname' =>   'Admin System',
            'type'     =>   'System',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('roles')->insert([
            'fullname' =>   'Super Admin',
            'type'     =>   'System',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('roles')->insert([
            'fullname' =>   'Provider',
            'type'     =>   'Provider',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('roles')->insert([
            'fullname' =>   'Add Providers',
            'type'     =>   'Employee',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('roles')->insert([
            'fullname' =>   'Add Clients',
            'type'     =>   'Employee',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('roles')->insert([
            'fullname' =>   'Client',
            'type'     =>   'Client',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('roles')->insert([
            'fullname' =>   'Carrier',
            'type'     =>   'Carrier',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
