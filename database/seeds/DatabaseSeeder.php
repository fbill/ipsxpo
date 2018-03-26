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
        $this->truncateTables([
            'roles',
            'shipping_types',
            'languages',
            'categories',
            'properties',
            'p_order_status',
            'order_status',
            'transation_types',
            'ports',
            'quotations'
        ]);
        // $this->call(UsersTableSeeder::class);ShippingType
        $this->call(RolSeeder::class);
        $this->call(ShippingTypeSeeder::class);
        $this->call(LanguageSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(PropertySeeder::class);
        $this->call(POrderStateSeeder::class);
        $this->call(OrderStateSeeder::class);
        $this->call(TransationTypeSeeder::class);
        $this->call(PortSeeder::class);
        $this->call(QuotationSeeder::class);
    }

    public function truncateTables(array $tables)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
