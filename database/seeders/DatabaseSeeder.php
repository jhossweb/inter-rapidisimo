<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Guia;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    protected static ?string $password;
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call(RolaAndPermissionSeeder::class);
        User::create([
            "documentId" => fake()->randomNumber(6, false),
            'name' => "david",
            "last_name" => fake()->lastName(),
            'email' => "david@david",
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'two_factor_secret' => null,
            'two_factor_recovery_codes' => null,
            'remember_token' => Str::random(10),
            'profile_photo_path' => null,
            'current_team_id' => null,
        ])->assignRole('Admin');

        //User::factory(10)->has(Customer::factory()->count(5))->create();
        //Guia::factory(20)->create();


        
    }
}
