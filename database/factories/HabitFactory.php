<?php

namespace Database\Factories;

use App\Models\Habit;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Habit>
 */
class HabitFactory extends Factory
{
    
    public function definition(): array
    {
        $habits = [
            'Ler 10 paginas',
            'Meditar por 15 minutos',
            'Fazer exercicios fisicos',
            'Beber 2 litros de Agua' 
        ];
        return [
            'user_id' => '1',
            'name' => $this->faker->randomElement($habits),
        ];
    }
}
