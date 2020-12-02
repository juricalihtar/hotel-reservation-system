<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            GuestSeeder::class,
            Room_typeSeeder::class,
            Room_statusSeeder::class,
            RoomSeeder::class,
            ReservationSeeder::class,
            PaymentSeeder::class
        ]);
    }
}
