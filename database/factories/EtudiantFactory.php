<?php

namespace Database\Factories;

use App\Models\Etudiant;
use App\Models\ville;
use Illuminate\Database\Eloquent\Factories\Factory;

class EtudiantFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Etudiant::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->word(),
            'adresse' => $this->faker->address(),
            'phone' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
            'naissance' => $this->faker->date(),
            'ville_id' => $this->faker->randomElement(Ville::pluck('id'))
            //
        ];
    }
}
