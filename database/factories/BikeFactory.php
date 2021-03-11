<?php

namespace Database\Factories;

use App\Models\Bike;
use Illuminate\Database\Eloquent\Factories\Factory;

class BikeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bike::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'bike_no' => $this->faker->numerify(),
            'engine_no' => $this->faker->numerify(),
            'chassis_no' => $this->faker->numerify(),
            'color' => $this->faker->colorName,
            'purchase_price' => $this->faker->numerify(),
            'sold_price' => $this->faker->numerify(),
            'purchase_from' => 1,
            'sold_to' => 2,
            'description' => $this->faker->text,
            'purchase_date' => $this->faker->dateTime,
            'sold_date' => $this->faker->dateTime,
        ];
    }
}
