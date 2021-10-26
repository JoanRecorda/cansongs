<?php

namespace Database\Factories;

use App\Models\Rehearsal;
use Illuminate\Database\Eloquent\Factories\Factory;

class RehearsalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Rehearsal::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(20),
            'date' => $this->faker->date(),
            'description' => $this->faker->text(),
        ];
    }
}
