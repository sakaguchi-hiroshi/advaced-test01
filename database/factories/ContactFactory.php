<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Contact::class;
    
    public function definition()
    {
        return [
            'fullname' => $this->faker->name(),
            'gender' => $this->faker->randomElement(['1', '2']),
            'email' => $this->faker->safeEmail(),
            'postcode' => $this->faker->postcode(),
            'address' => $this->faker->address(),
            'building_name' => $this->faker->secondaryAddress(),
            'opinion' => $this->faker->realText(100),
        ];
    }
}
