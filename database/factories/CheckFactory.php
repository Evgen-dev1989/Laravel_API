<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Check>
 */
class CheckFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'payment' => $this->faker->text(),
            'tags' => collect(['credit', 'loan', 'mortgage','cashless_payments','cash'])
                ->random(1)
                ->values()
                ->all(),
        ];
    }
}
