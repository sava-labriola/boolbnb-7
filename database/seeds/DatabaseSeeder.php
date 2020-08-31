<?php

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
        $this->call(ApartmentsTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(SponsorshipsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
