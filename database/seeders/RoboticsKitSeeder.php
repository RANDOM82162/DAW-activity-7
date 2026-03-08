<?php

namespace Database\Seeders;

use App\Models\RoboticsKit;
use Illuminate\Database\Seeder;

class RoboticsKitSeeder extends Seeder
{
    public function run(): void
    {
        RoboticsKit::create([
            'name' => 'Starter Kit',
            'description' => 'Basic robotics kit for beginner courses.',
        ]);

        RoboticsKit::create([
            'name' => 'Educational Robotics Kit',
            'description' => 'Intermediate robotics kit for practical learning.',
        ]);

        RoboticsKit::create([
            'name' => 'Advanced Robotics Kit',
            'description' => 'Advanced kit for complex robotics projects.',
        ]);
    }
}