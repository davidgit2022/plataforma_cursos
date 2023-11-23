@extends('layouts.app')

@section('title', 'Módulos')
@section('content')
    @component('_components.table-index-component')
        @slot('pageName')
            {{ $pageName }}
        @endslot

        @slot('componentName')
            {{ $componentName }}
        @endslot

        @slot('route')
            {{-- {{ route('modules.create', $course) }} --}}
        @endslot

        @slot('table')
            <div class="table-responsive">
                <table class="table" id="table-project">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Curso</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($modules as $module)
                            <tr>
                                <td>{{ $module->id }}</td>
                                <td><a href="{{ route('modules.show', $module->id) }}">{{ $module->name }}</a> </td>
                                <td>{{ $module->course->title }}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ route('courses.edit', $module->id) }}" class="btn btn-primary btn-sm">Editar</a>

                                        <form action="{{ route('modules.destroy', $module->id) }}" method="post">
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
                {{ $modules->links('pagination::bootstrap-5') }}
            </div>
        @endslot
    @endcomponent
@endsection
