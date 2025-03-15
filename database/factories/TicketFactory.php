<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TicketFactory extends Factory
{
    public function definition()
    {
        return [
            'flight_number' => 'FL' . $this->faker->randomNumber(4, true),
            'departure_city' => $this->faker->city,
            'arrival_city' => $this->faker->city,
            'departure_date' => $this->faker->dateTimeBetween('+1 days', '+1 month'),
            'arrival_date' => $this->faker->dateTimeBetween('+1 days', '+1 month'),
            'price' => $this->faker->randomFloat(2, 50, 500),
            'available_seats' => $this->faker->numberBetween(10, 200),
        ];
    }
}
