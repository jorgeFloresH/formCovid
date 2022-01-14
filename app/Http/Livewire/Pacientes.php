<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Paciente;

class Pacientes extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $nombre, $apellido, $segundo_apellido, $apellido_casada, $carnet, $telefono, $celular, $edad, $tipo_prueba, $resultado;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.pacientes.view', [
            'pacientes' => Paciente::latest()
						->orWhere('nombre', 'LIKE', $keyWord)
						->orWhere('apellido', 'LIKE', $keyWord)
						->orWhere('segundo_apellido', 'LIKE', $keyWord)
						->orWhere('apellido_casada', 'LIKE', $keyWord)
						->orWhere('carnet', 'LIKE', $keyWord)
						->orWhere('telefono', 'LIKE', $keyWord)
						->orWhere('celular', 'LIKE', $keyWord)
						->orWhere('edad', 'LIKE', $keyWord)
						->orWhere('tipo_prueba', 'LIKE', $keyWord)
						->orWhere('resultado', 'LIKE', $keyWord)
						->orWhere('created_at', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }
	
    private function resetInput()
    {		
		$this->nombre = null;
		$this->apellido = null;
		$this->segundo_apellido = null;
		$this->apellido_casada = null;
		$this->carnet = null;
		$this->telefono = null;
		$this->celular = null;
		$this->edad = null;
		$this->tipo_prueba = null;
		$this->resultado = null;
    }

    public function store()
    {
        $this->validate([
		'nombre' => 'required',
		'apellido' => 'required',
		'carnet' => 'required|regex:/^[0-9]{5,10}$/',
		
        ]);

        Paciente::create([ 
			'nombre' => $this-> nombre,
			'apellido' => $this-> apellido,
			'segundo_apellido' => $this-> segundo_apellido,
			'apellido_casada' => $this-> apellido_casada,
			'carnet' => $this-> carnet,
			'telefono' => $this-> telefono,
			'celular' => $this-> celular,
			'edad' => $this-> edad,
			'tipo_prueba' => $this-> tipo_prueba,
			'resultado' => $this-> resultado
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Paciente creado Satisfactoriamente.');
    }

    public function edit($id)
    {
        $record = Paciente::findOrFail($id);

        $this->selected_id = $id; 
		$this->nombre = $record-> nombre;
		$this->apellido = $record-> apellido;
		$this->segundo_apellido = $record-> segundo_apellido;
		$this->apellido_casada = $record-> apellido_casada;
		$this->carnet = $record-> carnet;
		$this->telefono = $record-> telefono;
		$this->celular = $record-> celular;
		$this->edad = $record-> edad;
		$this->tipo_prueba = $record-> tipo_prueba;
		$this->resultado = $record-> resultado;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'nombre' => 'required',
		'apellido' => 'required',
		'carnet' => 'required|regex:/^[0-9]{5,10}$/',
		]);

        if ($this->selected_id) {
			$record = Paciente::find($this->selected_id);
            $record->update([ 
			'nombre' => $this-> nombre,
			'apellido' => $this-> apellido,
			'segundo_apellido' => $this-> segundo_apellido,
			'apellido_casada' => $this-> apellido_casada,
			'carnet' => $this-> carnet,
			'telefono' => $this-> telefono,
			'celular' => $this-> celular,
			'edad' => $this-> edad,
			'tipo_prueba' => $this-> tipo_prueba,
			'resultado' => $this-> resultado
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Paciente actualizado satisfactoriamente.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Paciente::where('id', $id);
            $record->delete();
        }
    }
}
