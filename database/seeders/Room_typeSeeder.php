<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class Room_typeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('room_types')->insert([
            ['room_type_name' => 'Single', 'base_price' => 50.00],
            ['room_type_name' => 'Double', 'base_price' => 100.00],
            ['room_type_name' => 'Triple', 'base_price' => 150.00]
            
        ]);
    }
}
