<?php

namespace Database\Factories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $task = Task::class;
    public function definition()
    {
        return [
            'title' => $this->faker->realText(30),
            'content' => $this->faker->realText(300),
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => rand(1, 2)
        ];
    }
}
