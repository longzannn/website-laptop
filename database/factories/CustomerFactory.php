<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cus_name' => $this->faker->name,
            'cus_phone' => $this->faker->phoneNumber,
            'cus_address' => $this->faker->address,
            'email' => $this->faker->unique()->email,
            'password' => bcrypt('123123123'),
        ];
    }
}
