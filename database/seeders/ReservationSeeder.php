<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reservations')->insert([
            'reservation_date' => '2020-11-22',
            'check_in_date' => '2020-11-23',
            'check_out_date' => '2020-11-25',
            'adults' => 2,
            'children' => 0,
            'user_id' => 1,
            'guest_id' => 1,
            'room_id' => 1,
        ]);
    }
}
