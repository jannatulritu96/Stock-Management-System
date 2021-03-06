<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            ['type' => 'logo',
                'value' => 'assets/lg.png'
            ],
            [
                'type' => 'shop_name',
                'value' => 'Red Roses'
            ]
        ]);
    }
}
