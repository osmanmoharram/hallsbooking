<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Hall;
use App\Models\Offer;
use App\Models\Option;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Hall::factory(10)->create();

        Offer::factory(20)->create();

        Option::factory(50)->create();

        Option::factory(50)->create();

        Customer::factory(30)->create();


        //offer_option table seeds
        foreach (range(1, 10) as $iteration) {
            DB::table('offer_option')->insert([
                'offer_id' => Offer::all()->random()->id,
                'option_id' => Option::all()->random()->id
            ]);
        }

        //hall_option table seeds
        foreach (range(1, 10) as $iteration) {
            DB::table('hall_option')->insert([
                'hall_id' => Hall::all()->random()->id,
                'option_id' => Option::all()->random()->id
            ]);
        }

        // \App\Models\User::factory(10)->create();
    }
}
