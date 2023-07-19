<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Address;
use App\Models\Post;
use App\Models\User;
use App\Models\Post2;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //$this->call(PostSeeder::class);

        //Post::factory(200)->create();
        //User::factory(4)->create();
        //Address::factory(4)->create();
        Post2::factory(50)->create();
    }
}
