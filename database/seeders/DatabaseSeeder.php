<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            GroupSeeder::class,
            RoboticsKitSeeder::class,
            UserSeeder::class,
        ]);

        Course::factory(100)->create();
    }
}