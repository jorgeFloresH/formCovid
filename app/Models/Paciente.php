<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'pacientes';

    protected $fillable = ['nombre','apellido','segundo_apellido','apellido_casada','carnet','telefono','celular','edad','tipo_prueba','resultado'];
	
}
