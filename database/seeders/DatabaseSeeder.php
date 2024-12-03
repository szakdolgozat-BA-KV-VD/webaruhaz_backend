<?php

namespace Database\Seeders;

use App\Models\Rendeles;
use App\Models\User;
use App\Models\zsauto;
use Database\Factories\ZsautoFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory(15)->create();
        Rendeles::factory(5)->create();
        //zsauto::factory(10)->create();
    }
}
