<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Max',
                'lastname' => 'Mustermann',
                'email' => 'max.mustermann@example.com',
                'password' => Hash::make('password123'),
                'role' => 'admin'
            ],
            [
                'name' => 'Anna',
                'lastname' => 'Schmidt',
                'email' => 'anna.schmidt@example.com',
                'password' => Hash::make('password123'),
                'role' => 'employer'
            ],
            [
                'name' => 'Tom',
                'lastname' => 'Weber',
                'email' => 'tom.weber@example.com',
                'password' => Hash::make('password123'),
                'role' => 'employer'
            ],
            [
                'name' => 'Lisa',
                'lastname' => 'Müller',
                'email' => 'lisa.mueller@example.com',
                'password' => Hash::make('password123'),
                'role' => 'employer'
            ],
            [
                'name' => 'Paul',
                'lastname' => 'Fischer',
                'email' => 'paul.fischer@example.com',
                'password' => Hash::make('password123'),
                'role' => 'employer'
            ],
            [
                'name' => 'Sarah',
                'lastname' => 'Klein',
                'email' => 'sarah.klein@example.com',
                'password' => Hash::make('password123'),
                'role' => 'user'
            ],
            [
                'name' => 'Michael',
                'lastname' => 'Schwarz',
                'email' => 'michael.schwarz@example.com',
                'password' => Hash::make('password123'),
                'role' => 'user'
            ],
            [
                'name' => 'Julia',
                'lastname' => 'Wagner',
                'email' => 'julia.wagner@example.com',
                'password' => Hash::make('password123'),
                'role' => 'user'
            ],
            [
                'name' => 'David',
                'lastname' => 'Meyer',
                'email' => 'david.meyer@example.com',
                'password' => Hash::make('password123'),
                'role' => 'user'
            ],
            [
                'name' => 'Nina',
                'lastname' => 'Hoffmann',
                'email' => 'nina.hoffmann@example.com',
                'password' => Hash::make('password123'),
                'role' => 'user'
            ]
        ];

        foreach ($users as $userData) {
            User::create($userData);
        }
    }
}
