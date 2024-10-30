<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    protected $model = Movie::class;

    public function definition()
    {
        return [
            'name' => $this->faker->sentence(3),
            'cast' => $this->faker->name(),
            'director' => $this->faker->name(),
            'img_url' => null,
            'sinopsis' => $this->faker->text(),
            'age' => $this->faker->numberBetween(0, 18),
            'duration' => '01:30:00',
            'trailer_url' => null,
            'price' => $this->faker->numberBetween(10000, 100000),
        ];
    }
}
