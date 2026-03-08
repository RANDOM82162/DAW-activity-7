<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    public function run(): void
    {
        Group::create([
            'name' => 'Beginner',
            'description' => 'Basic robotics level',
        ]);

        Group::create([
            'name' => 'Intermediate',
            'description' => 'Intermediate robotics level',
        ]);

        Group::create([
            'name' => 'Advanced',
            'description' => 'Advanced robotics level',
        ]);
    }
}