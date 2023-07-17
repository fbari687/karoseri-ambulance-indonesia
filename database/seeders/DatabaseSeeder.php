<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car;

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

        Car::create([
            'name' => 'Hino Dutro Short',
            'slug' => 'hino-dutro-short',
            'image' => 'product-1.jpg'
        ]);
        Car::create([
            'name' => 'Mitsubishi Strada Triton',
            'slug' => 'mitsubishi-strada-triton',
            'image' => 'product-2.jpg'
        ]);
        Car::create([
            'name' => 'Kia Travello',
            'slug' => 'kia-travello',
            'image' => 'product-3.jpg'
        ]);
        Car::create([
            'name' => 'Mitsubishi L300',
            'slug' => 'mitsubishi-l300',
            'image' => 'product-4.jpg'
        ]);
        Car::create([
            'name' => 'DFSK Super Cab',
            'slug' => 'dfsk-super-cab',
            'image' => 'product-5.jpg'
        ]);
    }
}
