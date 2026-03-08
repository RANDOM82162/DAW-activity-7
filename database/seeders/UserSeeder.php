<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Group;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $beginnerGroup = Group::where('name', 'Beginner')->first();

        User::create([
            'username' => 'Admon',
            'email' => 'admon@robotics.com',
            'password' => Hash::make('Adm@2022'),
            'role' => 'administrative',
            'group_id' => null,
        ]);

        User::create([
            'username' => 'Tecmilenio',
            'email' => 'tecmilenio@robotics.com',
            'password' => Hash::make('Adm@2022'),
            'role' => 'teacher',
            'group_id' => null,
        ]);

        User::create([
            'username' => 'Student',
            'email' => 'student@robotics.com',
            'password' => Hash::make('Adm@2022'),
            'role' => 'student',
            'group_id' => $beginnerGroup?->id,
        ]);
    }
}