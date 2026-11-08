<?php

namespace Database\Factories;

use App\Models\Major;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Major>
 */
class MajorFactory extends Factory
{
    public function definition(): array
    {
        $schoolClasses = ['AKL', 'BiD', 'TKJ'];

        return [
            'name' => fake()->unique()->randomElement($schoolClasses),
        ];
    }
}
