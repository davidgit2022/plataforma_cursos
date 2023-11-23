@extends('layouts.app')

@section('title', 'Cursos')
@section('content')
    @component('_components.table-index-component')

        @slot('pageName')
            {{ $pageName }}
        @endslot

        @slot('componentName')
            {{ $componentName }}
        @endslot

        @slot('route')
            {{ route('courses.create') }}
        @endslot

        @slot('table')
            <div class="table-responsive">
                <table class="table" id="table-project">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Titúlo</th>
                            <th>Precio</th>
                            <th>Imagen</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($courses as $course)
                            <tr>
                                <td>{{ $course->id }}</td>
                                <td><a href="{{ route('courses.show', $course->id) }}">{{ $course->title }}</a> </td>
                                <td>{{ $course->price }}</td>
                                <td><img src="{{ asset($course->image)}}" alt="" width="125"></td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-primary btn-sm">Editar</a>

                                        <form action="{{ route('courses.destroy', $course->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Desea eliminar el registro?')">Eliminar</button>
                                        </form>

                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td>
                                    <p>No hay datos en la tabla</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                {{ $courses->links('pagination::bootstrap-5') }}
            </div>
        @endslot
    @endcomponent
@endsection
