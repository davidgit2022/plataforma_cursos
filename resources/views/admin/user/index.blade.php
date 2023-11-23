@extends('layouts.app')

@section('title', 'Usuarios')
@section('content')
    @component('_components.table-index-component')

        @slot('pageName')
            {{ $pageName }}
        @endslot

        @slot('componentName')
            {{ $componentName }}
        @endslot

        @slot('route')
            {{ route('users.create') }}
        @endslot

        @slot('table')
            <div class="table-responsive">
                <table class="table" id="table-project">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Correo Electrónico</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td><a href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a> </td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-sm">Editar</a>

                                        <form action="{{ route('users.destroy', $user->id) }}" method="post">
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
                {{ $users->links('pagination::bootstrap-5') }}
            </div>
        @endslot
    @endcomponent
@endsection
