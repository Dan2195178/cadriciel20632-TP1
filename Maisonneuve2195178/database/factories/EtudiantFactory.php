<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Ville;
use Illuminate\Support\Facades\DB;


class EtudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
            'nom' => $this->faker->name(),
            'adresse' => $this->faker->address(),
            'phone' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'date_naissance' => $this->faker->unique()->dateTimeBetween($startDate = '-50 years', $endDate = '-18 years')->format('Y-m-d'),
            //'ville_id' => Ville::factory()
             'ville_id' => random_int(DB::table('villes')->min('id'), DB::table('villes')->max('id'))  //'ville_id' => random_int(1,15);
        ];
    }
}
