<?php

namespace Database\Seeders;

use App\Models\Apartment;
use Illuminate\Database\Seeder;

class ApartmetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Apartment::factory(20)->create();
    }
}
