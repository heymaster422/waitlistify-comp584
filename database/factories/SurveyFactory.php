<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Survey>
 */
class SurveyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'comp_584'=> true,
            'comp_333'=> true,
            'comp_484'=> false,
            'comp_424'=> true,
            'comp_583'=> false,
        ];
    }
}
