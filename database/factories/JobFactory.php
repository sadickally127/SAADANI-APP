<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'Title'=>fake()->jobTitle(),
            'employer_id'=> Employer::factory(),
            'Salary'=>'$'.number_format(fake()->numberBetween(10000, 100000)),
            'Location'=>fake()->city()
        ];
    }
}
