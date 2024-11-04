<?php

namespace Database\Factories;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Master>
 */
class MasterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'uuid'      => $this->faker->uuid,
            'name'      => $this->faker->userName,
            'email'     => $this->faker->unique()->safeEmail,
            'password'  => Hash::make('password'),
        ];
    }
}
