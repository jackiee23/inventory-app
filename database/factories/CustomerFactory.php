<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'png_jawab' => $this->faker->name(),
            'alamat'=> $this->faker->address(),
            'no_tlp'=> $this->faker->phoneNumber(),
            'jenis'=>$this->faker->word(),
        ];
    }
}
