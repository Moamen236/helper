<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Patient::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'img' => $this->faker->word(),
            'dob' => $this->faker->date('Y-m-d', 'now'),
            'gender' => $this->faker->randomElement(array('male', 'female')),
            'no_of_bro' => $this->faker->numberBetween(1, 9),
            'arr_btw_bro' => $this->faker->numberBetween(1, 9),
            'cg_name' => $this->faker->lastName(),
            'cg_relation' => $this->faker->randomElement(array('father', 'mother', 'borther', 'sister', 'uncle', 'grandfather', 'grandmother')),
            'cg_phone' => $this->faker->e164PhoneNumber(),
        ];
    }
}