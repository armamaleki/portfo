<?php

namespace Database\Factories;

use App\Models\Portfolio;
use Illuminate\Database\Eloquent\Factories\Factory;

class PortfolioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Portfolio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'title' => $this->faker->title(),
            'client' => $this->faker->title(),
            'avatar' => $this->faker->image('public\img\portfolio\avatar', 400, 300),
            'url' => $this->faker->url(),
            'slug' => $this->faker->slug(),
            'status' => 1,
            'body' => $this->faker->text(500),

        ];
    }
}
