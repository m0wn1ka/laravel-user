<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Registration>
 */
class RegistrationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'firstname' => $this->faker->sentence, //Generates a fake sentence
            'lastname' => $this->faker->sentence, 
            //generates fake 30 paragraphs
            // 'user_id' => User::factory() 
        ];
    }
}
