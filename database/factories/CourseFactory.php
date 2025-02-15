<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Course;

class CourseFactory extends Factory
{
    protected $model = Course::class; // Define the model

    public function definition()
    {
        return [
            'name' => $this->faker->sentence(3), // Generate a random course name
            'duration' => $this->faker->numberBetween(5, 50), // Random duration in hours
            'field' => $this->faker->word(), // Random field of study
            'user_id' => \App\Models\User::factory(), // Generate a random user ID
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
