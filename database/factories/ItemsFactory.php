<?php

namespace Database\Factories;

use App\Models\Items;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Items::class;

    public function definition()
    {
        return [
        'title' => $this->faker->text,
        'price' => $this->faker->randomNumber($nbDigits = NULL, $strcit = false),
        'description' => $this->faker->text,
        'class' => $this->faker->text,
        'image' => $this->faker->text
        ];
    }
}
