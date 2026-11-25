<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = ['Guitars', 'Basses', 'Amplifiers', 'Effects pedals', 'Drums and percussion',
            'Keyboards and synths', 'Microphones', 'PA and monitors', 'DJ gear', 'Cables and accessories'];

        foreach ($names as $name) {
            Category::create(['name' => $name]);
        }
    }
}
