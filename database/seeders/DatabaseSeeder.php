<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Posts;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        User::factory(1000)->create();
        Order::factory(5000)->create();
        Posts::factory(100)->create();

    }
}
