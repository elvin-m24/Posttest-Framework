<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tiket>
 */
class TiketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [ 
            'kodetiket' => $this->faker->randomAscii(10), 
            'asal' => $this->faker->city(), 
            'tujuan' => $this->faker->city(), 
            'harga' => $this->faker->randomNumber(7, true),
            'pesawat_id' => $this->faker->numberBetween(1, 3), 
        ]; 
    }
}
