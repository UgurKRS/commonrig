<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CategorySeeder::class);
        User::factory()->create([
            'name' => 'CommonRig Admin',
            'email' => 'admin@commonrig.net',
            'city' => 'Barcelona',
            'role' => 'admin',
        ]);

        User::factory()->create([
            'name' => 'CommonRig Moderator',
            'email' => 'moderator@commonrig.net',
            'city' => 'Barcelona',
            'role' => 'moderator',
        ]);

        User::factory()->create([
            'name' => 'Marta Vidal',
            'email' => 'marta@commonrig.net',
            'city' => 'Barcelona',
            'bio' => 'Bass player in a rock band. I lend the gear I am not using.',
        ]);

        User::factory()->create([
            'name' => 'Jordi Serra',
            'email' => 'jordi@commonrig.net',
            'city' => 'Barcelona',
            'bio' => 'Guitarist. Looking for gear for rehearsals and the odd gig.',
        ]);

        User::factory(6)->create();
    }
}
