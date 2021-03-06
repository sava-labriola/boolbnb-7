<?php

use Illuminate\Database\Seeder;
use App\SponsorType;

class SponsorshipsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sponsorizzazioni = [
            ['id' => 1, 'tipologia_sponsorizzazione' => '1 giorno'],
            ['id' => 2, 'tipologia_sponsorizzazione' => '3 giorni'],
            ['id' => 3, 'tipologia_sponsorizzazione' => '6 giorni'],
        ];
        foreach ($sponsorizzazioni as $sponsorizzazione) {
            SponsorType::create($sponsorizzazione);
        }
    }
}
