<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use App\Models\User;
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
        $user =    User::factory()->create([
            'name' => 'John Doe'
        ]);

        Product::factory(12)->create([
            'user_id' => $user->id
        ]);
    }
}
