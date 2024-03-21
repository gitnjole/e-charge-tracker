<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Card;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Store;
use App\Models\ChargingSpot;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = new Faker();

        $cards = Card::factory()->count(50)->create();

        $stores = Store::factory()->count(10)->create();

        ChargingSpot::Factory()->count(20)->create();

        foreach ($cards as $card) {
            $randomStore = $stores->random();

            $card->store_id = $randomStore->id;

            $startTimestamp = strtotime('-30 days');
            $endTimestamp = strtotime('now');
            $randomTimestamp = mt_rand($startTimestamp, $endTimestamp); 
            
            $card->purchased_at = date('Y-m-d H:i:s', $randomTimestamp);

            $card->save();
        }
    }
}
