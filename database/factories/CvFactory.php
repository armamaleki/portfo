<?php

namespace Database\Factories;

use App\Models\cv;
use Illuminate\Database\Eloquent\Factories\Factory;

class CvFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = cv::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title(),
            'company' => $this->faker->company(),
            'body' => $this->faker->text(300),
            'from' => $this->faker->year(2020),
            'to' => $this->faker->year(2020),
            'slug' => $this->faker->title(2020),
        ];
    }
}
