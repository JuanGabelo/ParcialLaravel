<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Task;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    protected $model = Task::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'task_name' => $this->faker->word(),
            'task_description' => $this->faker->sentence(),
            'task_is_done' => $this->faker->boolean(),
            'task_observation' => $this->faker->sentence(),
            'category_id' => Category::factory(),
        ];
    }
}
