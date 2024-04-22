<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Feature;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Package;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Doe',
            'email' => 'johndoe@gmail.com',
            'password' => bcrypt('123.321Aa'),
        ]);

        Feature::create([
            'image' => 'image1',
            'route_name' => 'feature1',
            'name' => 'Calculate sum',
            'description' => 'Calculate sum of two numbers',
            'required_credits' => 1,
            'active' => true,
        ]);

        Feature::create([
            'image' => 'image1',
            'route_name' => 'feature2',
            'name' => 'Calculate difference',
            'description' => 'Calculate the difference of numbers',
            'required_credits' => 1,
            'active' => true,
        ]);

        Package::create([
            'name' => 'Basic',
            'price' => 5,
            'credits' => 20,
            
        ]);

        Package::create([
            'name' => 'Silver',
            'price' => 20,
            'credits' => 100,
            
        ]);

        Package::create([
            'name' => 'Gold',
            'price' => 50,
            'credits' => 500,
            
        ]);

    }
}
