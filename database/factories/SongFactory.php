<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SongFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name"=>Str::random(5),
            "duration"=>$this->faker->dateTimeBetween("00:01:00", "00:05:00"),
            "artist"=>$this->faker->name()
        ];
    }
}
