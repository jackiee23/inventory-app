<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class IitemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'stuff_id' => mt_rand(1, 5),
            'jumlah' => $this->faker->randomNumber(3),
            'tgl_masuk' => $this->faker->dateTimeThisYear(),
        ];
    }
}
