<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->insert([
            'fullname' =>   'English',
            'code'     =>   'en',
            'image'     =>   'icon.gif',
            'directory'     =>   'english',
            'orden'     =>   '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('languages')->insert([
            'fullname' =>   'Español',
            'code'     =>   'es',
            'image'     =>   'icon.gif',
            'directory'     =>   'espanol',
            'orden'     =>   '2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
