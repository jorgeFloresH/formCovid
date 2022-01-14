<!-- Modal -->
<div wire:ignore.self class="modal fade" id="exampleModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Crear Nuevo Paciente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
           <div class="modal-body">
				<form>
                    
            <div class="form-group">
                <label for="nombre"></label>
                <h6>Nombre:</h6>
                <input wire:model="nombre" type="text" class="form-control" id="nombre" placeholder="Nombre">@error('nombre') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="apellido"></label>
                <h6>Apellido:</h6>
                <input wire:model="apellido" type="text" class="form-control" id="apellido" placeholder="Apellido">@error('apellido') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="segundo_apellido"></label>
                <h6>Segundo apellido:</h6>
                <input wire:model="segundo_apellido" type="text" class="form-control" id="segundo_apellido" placeholder="Segundo Apellido">@error('segundo_apellido') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            {{-- <div class="form-group">
                <label for="apellido_casada"></label>
                <h6>Apellido casada(*opcional):</h6>
                <input wire:model="apellido_casada" type="text" class="form-control" id="apellido_casada" placeholder="Apellido Casada">@error('apellido_casada') <span class="error text-danger">{{ $message }}</span> @enderror
            </div> --}}
            <div class="form-group">
                <label for="carnet"></label>
                <h6>Cédula de identidad:</h6>
                <input wire:model="carnet" type="text" class="form-control" id="carnet" placeholder="Cédula de identidad">@error('carnet') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="telefono"></label>
                <h6>Teléfono:</h6>
                <input wire:model="telefono" type="text" class="form-control" id="telefono" placeholder="Teléfono">@error('telefono') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            {{-- <div class="form-group">
                <label for="celular"></label>
                <h6>Celular:</h6>
                <input wire:model="celular" type="text" class="form-control" id="celular" placeholder="Celular">@error('celular') <span class="error text-danger">{{ $message }}</span> @enderror
            </div> --}}
            <div class="form-group">
                <label for="edad"></label>
                <h6>Edad:</h6>
                <input wire:model="edad" type="text" class="form-control" id="edad" placeholder="Edad">@error('edad') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="tipo_prueba"></label>
                <h6>Código Prueba:</h6>
                <input wire:model="tipo_prueba" type="text" class="form-control" id="tipo_prueba" placeholder="Código Prueba">@error('tipo_prueba') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="resultado"></label>
                <h6>Resultado:</h6>
                {{-- <input wire:model="resultado" type="text" class="form-control" id="resultado" placeholder="Resultado">@error('resultado') <span class="error text-danger">{{ $message }}</span> @enderror --}}
                <select wire:model="resultado" type="text" class="form-control" id="resultado" placeholder="Resultado">@error('resultado') <span class="error text-danger">{{ $message }}</span> @enderror
                    <option value="">Seleccione una opción</option>
                    <option value="positivo">Positivo</option>
                    <option value="negativo">Negativo</option>
                </select>
                </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Cerrar</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal">Guardar</button>
            </div>
        </div>
    </div>
</div>