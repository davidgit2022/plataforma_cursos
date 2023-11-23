@csrf
<div class="mb-3">
    <label for="title" class="form-label">Titúlo:</label>
    <input type="text" class="form-control" id="title" placeholder="Titúlo" name="title"
        value="{{ old('title', $course->title) }}">
    @error('title')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="mb-3">
    <label for="description" class="form-label">Descripción:</label>
    <textarea name="description" rows="5" class="form-control" id="description" name="description">{{ old('description', $course->description) }}
    </textarea>
    @error('description')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="mb-3">
    <label for="price" class="form-label">Precio:</label>
    <input type="number" class="form-control" id="price" placeholder="Precio" name="price"
        value="{{ old('price', $course->price) }}">
    @error('price')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="input-group mb-3">
    <input type="file" class="form-control" id="image" name="image">
    <label class="input-group-text" for="image">Imagen</label>

</div>
<div class="input-group mb-3">
    @error('image')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

@if ($course->id == 0)
    <button type="submit" class="btn btn-primary">Guardar</button>
@else
    <button type="submit" class="btn btn-primary">Actualizar</button>
@endif

<div class="float-sm-end mb-2">
    <a href="{{ route('courses.index') }}" class="btn btn-danger">Cancelar</a>
</div>
