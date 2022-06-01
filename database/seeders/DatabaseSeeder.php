<?php

namespace Database\Seeders;

use App\Models\Addon;
use App\Models\Book;
use App\Models\Member;
use App\Models\User;
use App\Models\Vehicle;
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
        // \App\Models\User::factory(10)->create();
        User::factory(25)->create();
        Member::factory(25)->create();
        Vehicle::factory(25)->create();
        Addon::factory(25)->create();
        Book::factory(25)->create();
    }
}
