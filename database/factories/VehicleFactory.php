<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\vehicle;

class VehicleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vehicle::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName().' '.$this->faker->lastName(),
            'weekly_fee' => $this->faker->randomFloat(2, 1000, 9999.99),
            'daily_fee' => $this->faker->randomFloat(2, 50, 999.99),
            'transmission' => $this->faker->text,
            'capacity' => $this->faker->numberBetween(4, 8),
            'baggage_space' => $this->faker->numberBetween(3, 12),
            'status' => random_int(0,1),
        ];
    }
}
