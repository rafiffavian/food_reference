<?php

use Illuminate\Database\Seeder;

class TypemenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_menu')->insert([[
            'jenis_menu' => 'Food'
        ],[
            'jenus_menu' => 'Drink'
        ]]);
    }
}
