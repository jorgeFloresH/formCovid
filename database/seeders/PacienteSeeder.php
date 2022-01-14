<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Paciente;

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Paciente::create([
            'nombre' => 'jose',
            'apellido' => 'jimenez',
            'segundo_apellido' => 'perez',
            'apellido_casada' => 'salas',
            'carnet' => '52525252',
            'telefono' => '4422442',
            'celular' => '70707070',
            'edad' => '18',
            'tipo_prueba' => 'antigeno',
            'resultado' => 'negativo',
            
          ]);
    }
}
