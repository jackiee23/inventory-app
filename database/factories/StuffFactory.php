<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StuffFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_barang' => $this->faker->word(),
            'kd_barang' => $this->faker->bothify('???-###'),
            'satuan' => 'centimeter',
            'stok' => $this->faker->randomNumber(3),
            'status' => 'OK',
        ];
    }
}
