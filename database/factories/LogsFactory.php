<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class LogsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'data_entrada'=>$this->faker->timestamp(),
            'criado_em'=>$this->faker->timestamp(),
            'id_user'=>User::pluck('id')->random(),
        ];
    }
}
