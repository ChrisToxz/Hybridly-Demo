<?php

namespace Database\Factories;

use App\Enums\TodoPriorityEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Todo>
 */
class TodoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => 'Todo: '.fake()->sentence('5'),
            'content' => fake()->sentence(10),
            'priority' => fake()->randomElement(TodoPriorityEnum::cases()),
            'user_id' => 1,
        ];
    }
}