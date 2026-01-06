<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Habit>
 */
class HabitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $habits = [
            'Ler 10 páginas de um livro',
            'Fazer 30 minutos de exercício físico',
            'Meditar por 15 minutos',
            'Beber 2 litros de água',
            'Escrever no diário',
            'Aprender uma nova palavra em um idioma estrangeiro',
            'Praticar um hobby criativo',
            'Caminhar ao ar livre por 20 minutos',
            'Desconectar-se das telas 1 hora antes de dormir',
            'Organizar o espaço de trabalho',
        ];

        return [
            'user_id' => 1,
            'name'    => $this->faker->unique()->randomElement($habits),
        ];
    }
}
