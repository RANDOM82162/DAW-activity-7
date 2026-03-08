<?php

namespace Database\Factories;

use App\Models\RoboticsKit;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    public function definition(): array
    {
        return [
            'course_key' => strtoupper($this->faker->bothify('ROB###')) . $this->faker->unique()->numberBetween(10, 999),
            'title' => $this->faker->sentence(3),
            'cover' => $this->faker->imageUrl(640, 480, 'education', true, 'robotics'),
            'content' => $this->faker->paragraphs(3, true),
            'didactic_material' => $this->faker->paragraphs(2, true),
            'robotics_kit_id' => RoboticsKit::inRandomOrder()->first()?->id ?? RoboticsKit::factory(),
        ];
    }
}