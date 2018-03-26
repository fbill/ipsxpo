<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('properties')->insert([
            'id'       =>   '1',
            'fullname' =>   'Year',
            'description'     =>   '',
            'languages_id'     =>   '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('properties')->insert([
            'id'       =>   '1',
            'fullname' =>   'Año',
            'description'     =>   '',
            'languages_id'     =>   '2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('properties')->insert([
            'id'       =>   '2',
            'fullname' =>   'Make',
            'description'     =>   '',
            'languages_id'     =>   '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('properties')->insert([
            'id'       =>   '2',
            'fullname' =>   'Marca',
            'description'     =>   '',
            'languages_id'     =>   '2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('properties')->insert([
            'id'       =>   '3',
            'fullname' =>   'Model',
            'description'     =>   '',
            'languages_id'     =>   '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('properties')->insert([
            'id'       =>   '3',
            'fullname' =>   'Modelo',
            'description'     =>   '',
            'languages_id'     =>   '2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('properties')->insert([
            'id'       =>   '4',
            'fullname' =>   'Mileage',
            'description'     =>   '',
            'languages_id'     =>   '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('properties')->insert([
            'id'       =>   '4',
            'fullname' =>   'Millaje',
            'description'     =>   '',
            'languages_id'     =>   '2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('properties')->insert([
            'id'       =>   '5',
            'fullname' =>   'Condition',
            'description'     =>   'Nuevo/Usado',
            'languages_id'     =>   '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('properties')->insert([
            'id'       =>   '5',
            'fullname' =>   'Condición',
            'description'     =>   'New/Used',
            'languages_id'     =>   '2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('properties')->insert([
            'id'       =>   '6',
            'fullname' =>   'Price',
            'description'     =>   '',
            'languages_id'     =>   '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('properties')->insert([
            'id'       =>   '6',
            'fullname' =>   'Precio',
            'description'     =>   '',
            'languages_id'     =>   '2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('properties')->insert([
            'id'       =>   '7',
            'fullname' =>   'Color',
            'description'     =>   '',
            'languages_id'     =>   '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('properties')->insert([
            'id'       =>   '7',
            'fullname' =>   'Color',
            'description'     =>   '',
            'languages_id'     =>   '2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('properties')->insert([
            'id'       =>   '8',
            'fullname' =>   'Engine',
            'description'     =>   '',
            'languages_id'     =>   '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('properties')->insert([
            'id'       =>   '8',
            'fullname' =>   'Motor',
            'description'     =>   '',
            'languages_id'     =>   '2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('properties')->insert([
            'id'       =>   '9',
            'fullname' =>   'Drivetrian',
            'description'     =>   '',
            'languages_id'     =>   '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('properties')->insert([
            'id'       =>   '9',
            'fullname' =>   'Transmisión',
            'description'     =>   '',
            'languages_id'     =>   '2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('properties')->insert([
            'id'       =>   '10',
            'fullname' =>   'Type',
            'description'     =>   'Excavator/Retroexcavator/Aeria Work Platforms/Agricultural Machinery/Compaction Equipment/Concrete Equipment/Crawler Loaders/Plows/Drilling Equipment/Forestry Equipment/Cranes/Forklifts/Skid Steer/Other Equipment',
            'languages_id'     =>   '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('properties')->insert([
            'id'       =>   '10',
            'fullname' =>   'Tipo',
            'description'     =>   'Excavadora/Retroexcavadora/ Plataformas Aereas/Maquinaria Agicultura/Equipo para Compactar/Equipo de Concreto/Cargadores/Maquinaria de Arar/Maquinaria Taladro/Equipo Maderero/Gruas/Montacarga/Cargador Frontal/Otros Equipos',
            'languages_id'     =>   '2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('properties')->insert([
            'id'       =>   '11',
            'fullname' =>   'Hours Used',
            'description'     =>   '',
            'languages_id'     =>   '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('properties')->insert([
            'id'       =>   '11',
            'fullname' =>   'Horas Usadas',
            'description'     =>   '',
            'languages_id'     =>   '2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('properties')->insert([
            'id'       =>   '12',
            'fullname' =>   'Size',
            'description'     =>   '',
            'languages_id'     =>   '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('properties')->insert([
            'id'       =>   '12',
            'fullname' =>   'Tamaño',
            'description'     =>   '',
            'languages_id'     =>   '2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('properties')->insert([
            'id'       =>   '13',
            'fullname' =>   'Product',
            'description'     =>   'Printers/Pc/Mp3/Cameras/Video Cameras/Laptops/Netbooks/Audio/TV',
            'languages_id'     =>   '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('properties')->insert([
            'id'       =>   '13',
            'fullname' =>   'Producto',
            'description'     =>   'Impresoras/Pc/Mp3/Camaras/Camaras de Video/Laptops/Netbooks/Audio/TV',
            'languages_id'     =>   '2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('properties')->insert([
            'id'       =>   '14',
            'fullname' =>   'Type',
            'description'     =>   'Textiles/Generators/Textile/Agricultural/Printing/Others',
            'languages_id'     =>   '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('properties')->insert([
            'id'       =>   '14',
            'fullname' =>   'Tipo',
            'description'     =>   'Textiles/Generadores/Textil/Agricultura/Imprenta/Otros',
            'languages_id'     =>   '2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('properties')->insert([
            'id'       =>   '15',
            'fullname' =>   'Type',
            'description'     =>   'Container/Chassis/Genset',
            'languages_id'     =>   '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('properties')->insert([
            'id'       =>   '15',
            'fullname' =>   'Tipo',
            'description'     =>   'Contenedor/Chasis/Genset',
            'languages_id'     =>   '2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
