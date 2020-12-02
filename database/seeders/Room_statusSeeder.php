<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Room_statusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('room_statuses')->insert([
            ['room_status_name' => 'Vacant'],
            ['room_status_name' => 'Occupied']
            
        ]);}
}
