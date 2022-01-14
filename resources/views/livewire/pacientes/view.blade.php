@section('title', __('Pacientes'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="fab fa-laravel text-info"></i>
							Listado de Pacientes </h4>
						</div>
						<div wire:poll.60s>
							{{-- <code><h5>{{ now()->format('H:i:s') }} </h5></code> --}}
						</div>
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Buscar Pacientes">
						</div>
						<div class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
						<i class="fa fa-plus"></i>  Add Pacientes
						</div>
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.pacientes.create')
						@include('livewire.pacientes.update')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Nombre</th>
								<th>Apellido</th>
								<th>Segundo Apellido</th>
								<th>Apellido Casada</th>
								<th>Carnet</th>
								<th>Telefono</th>
								<th>Celular</th>
								<th>Edad</th>
								<th>Tipo Prueba</th>
								<th>Resultado</th>
								<td>Acciones</td>
							</tr>
						</thead>
						<tbody>
							@foreach($pacientes as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->nombre }}</td>
								<td>{{ $row->apellido }}</td>
								<td>{{ $row->segundo_apellido }}</td>
								<td>{{ $row->apellido_casada }}</td>
								<td>{{ $row->carnet }}</td>
								<td>{{ $row->telefono }}</td>
								<td>{{ $row->celular }}</td>
								<td>{{ $row->edad }}</td>
								<td>{{ $row->tipo_prueba }}</td>
								<td>{{ $row->resultado }}</td>
								<td width="90">
								<div class="btn-group">
									<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Acciones
									</button>
									<div class="dropdown-menu dropdown-menu-right">
									<a data-toggle="modal" data-target="#updateModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Editar </a>							 
									<a class="dropdown-item" onclick="confirm('Confirme eliminar el paciente con id {{$row->id}}? \nPaciente eliminado!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Eliminar </a>   
									</div>
								</div>
								</td>
							@endforeach
						</tbody>
					</table>						
					{{ $pacientes->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>