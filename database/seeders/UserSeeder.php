<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'ROOT',
            'email' => 'root@email.com',
            'password' => password_hash('12345678', PASSWORD_DEFAULT),
            'role' => 'ROOT'
        ]);

        User::create([
            'name' => 'ADMIN',
            'email' => 'admin@email.com',
            'password' => password_hash('12345678', PASSWORD_DEFAULT),
            'role' => 'ADMIN'
        ]);

        User::create([
            'name' => 'USER',
            'email' => 'user@email.com',
            'password' => password_hash('12345678', PASSWORD_DEFAULT),
            'role' => 'USER'
        ]);

        User::factory()->count(10)->create();
    }
}
