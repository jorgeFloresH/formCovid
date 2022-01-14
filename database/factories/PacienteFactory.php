<?php

namespace Database\Factories;

use App\Models\Paciente;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PacienteFactory extends Factory
{
    protected $model = Paciente::class;

    public function definition()
    {
        return [
			'nombre' => $this->faker->name,
			'apellido' => $this->faker->name,
			'segundo_apellido' => $this->faker->name,
			'apellido_casada' => $this->faker->name,
			'carnet' => $this->faker->name,
			'telefono' => $this->faker->name,
			'celular' => $this->faker->name,
			'edad' => $this->faker->name,
			'tipo_prueba' => $this->faker->name,
			'resultado' => $this->faker->name,
        ];
    }
}
