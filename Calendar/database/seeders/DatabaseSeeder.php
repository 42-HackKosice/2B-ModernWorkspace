<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\User;
use Database\Factories\EventFactory;
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

         User::factory(10)
             ->has(Event::factory()->count(3))
             ->create();


    }
}
