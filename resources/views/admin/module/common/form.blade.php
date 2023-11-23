@csrf
<div class="mb-3">
    <label for="name" class="form-label">Nombre:</label>
    <input type="text" class="form-control" id="name" placeholder="Nombre" name="name"
        value="{{ old('name', $module->name) }}">
    @error('name')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>



@if ($module->id == 0)
    <button type="submit" class="btn btn-primary">Guardar</button>
@else
    <button type="submit" class="btn btn-primary">Actualizar</button>
@endif

<div class="float-sm-end mb-2">
    <a href="{{ route('modules.index') }}" class="btn btn-danger">Cancelar</a>
</div>
