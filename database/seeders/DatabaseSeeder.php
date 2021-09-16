<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Shane Poppleton',
            'email' => 'shane@alphasg.com.au',
            'password' => Hash::make('secret'),
            'email_verified_at' => now()
        ]);

        User::factory(50)->create();
    }
}
