<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class customersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create(); 

        foreach (range(1, 50) as $index) {
            DB::table('customers')->insert([
                'email' => $faker->unique()->safeEmail(),
                'password' => Hash::make('password123'),  
                'status' => $faker->randomElement(['active', 'inactive', 'banned']), 
                'account_type' => $faker->randomElement(['basic', 'premium', 'enterprise']),
                'last_login' => $faker->dateTimeBetween('-1 year', 'now'), 
                'created_at' => now(), 
                'updated_at' => now(), 
            ]);
        }
    }
}
