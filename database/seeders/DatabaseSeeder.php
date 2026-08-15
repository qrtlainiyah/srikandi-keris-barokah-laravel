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
        // Create Admin User
        User::factory()->create([
            'name' => 'Admin Srikandi',
            'email' => 'yani01@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        // Seed products
        $this->call([
            ProductSeeder::class,
        ]);
    }
}
