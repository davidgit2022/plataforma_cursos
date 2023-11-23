@csrf
<div class="mb-3">
    <label for="name" class="form-label">Nombre:</label>
    <input type="text" class="form-control" id="name" placeholder="Nombre" name="name" value="{{ old('name', $user->name)}}">
    @error('name')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="mb-3">
    <label for="email" class="form-label">Correo Electrónico:</label>
    <input type="email" class="form-control" id="email" placeholder="Correo Electrónico" name="email" value="{{ old('email', $user->email)}}">
    @error('email')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="mb-3">
    <label for="password" class="form-label">Contraseña:</label>
    <input type="password" class="form-control" id="password" placeholder="Contraseña" name="password" value="{{ old('password', $user->password)}}">
    @error('password')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

@if ($user->id == 0)
    <button type="submit" class="btn btn-primary">Guardar</button>
@else
    <button type="submit" class="btn btn-primary">Actualizar</button>
@endif

<div class="float-sm-end mb-2">
    <a href="{{ route('users.index') }}" class="btn btn-danger">Cancelar</a>
</div>
