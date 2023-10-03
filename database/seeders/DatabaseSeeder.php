<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\House;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

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
        $faker = Faker::create('id_ID');
        House::insert([
            'name' => $faker->name,
            'phone_number' => $faker->randomNumber(9, true),
            'status' => 'permanent',
        ]);
        House::insert([
            'name' => $faker->name,
            'phone_number' => $faker->randomNumber(9, true),
            'status' => 'permanent',
        ]);
        House::insert([
            'name' => $faker->name,
            'phone_number' => $faker->randomNumber(9, true),
            'status' => 'permanent',
        ]);
        House::insert([
            'name' => $faker->name,
            'phone_number' => $faker->randomNumber(9, true),
            'status' => 'permanent',
        ]);
        House::insert([
            'name' => $faker->name,
            'phone_number' => $faker->randomNumber(9, true),
            'status' => 'permanent',
        ]);
        House::insert([
            'name' => $faker->name,
            'phone_number' => $faker->randomNumber(9, true),
            'status' => 'permanent',
        ]);
        House::insert([
            'name' => $faker->name,
            'phone_number' => $faker->randomNumber(9, true),
            'status' => 'permanent',
        ]);
        House::insert([
            'name' => $faker->name,
            'phone_number' => $faker->randomNumber(9, true),
            'status' => 'permanent',
        ]);
        House::insert([
            'name' => $faker->name,
            'phone_number' => $faker->randomNumber(9, true),
            'status' => 'permanent',
        ]);
        House::insert([
            'name' => $faker->name,
            'phone_number' => $faker->randomNumber(9, true),
            'status' => 'permanent',
        ]);
        House::insert([
            'name' => $faker->name,
            'phone_number' => $faker->randomNumber(9, true),
            'status' => 'permanent',
        ]);
        House::insert([
            'name' => $faker->name,
            'phone_number' => $faker->randomNumber(9, true),
            'status' => 'permanent',
        ]);
        House::insert([
            'name' => $faker->name,
            'phone_number' => $faker->randomNumber(9, true),
            'status' => 'permanent',
        ]);
        House::insert([
            'name' => $faker->name,
            'phone_number' => $faker->randomNumber(9, true),
            'status' => 'permanent',
        ]);
        House::insert([
            'name' => $faker->name,
            'phone_number' => $faker->randomNumber(9, true),
            'status' => 'permanent',
        ]);
        House::insert([
            'status' => 'contract',
        ]);
        House::insert([
            'status' => 'contract',
        ]);
        House::insert([
            'status' => 'contract',
        ]);
        House::insert([
            'status' => 'contract',
        ]);
        House::insert([
            'status' => 'contract',
        ]);
    }
}
