<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'Jozsef',
            'email' => 'test@example.com',
            'password' =>'1234'
        ]);
        \App\Models\User::factory(10)->create();


        \App\Models\Comic::factory(10)->create();
        \App\Models\Customer::factory(10)->create();

    }
}
