<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Member;
use App\Models\Vehicle;
use App\Models\book;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'member_id' => Member::factory(),
            'vehicle_id' => Vehicle::factory(),
            'pickup_location' => $this->faker->address(),
            'pickup_date' => $this->faker->date(),
            'dropoff_location' => $this->faker->address(),
            'dropoff_date' => $this->faker->date(),
        ];
    }
}
