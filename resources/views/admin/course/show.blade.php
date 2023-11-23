@extends('layouts.app')

@section('title', 'Ver Curso')
@section('content')
    {{-- <div class="container mt-2">
        <div class="row">
            <div class="col-lg-6">
                <div class="float-sm-start mb-2">
                    <h2><b>{{ $pageName }} | {{ $componentName }}</b></h2>
                </div>
                <div class="float-sm-end mb-2">
                    <a href="{{ route('courses.index') }}" class="btn btn-success btn-sm">Volver</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <form>
                    <fieldset disabled>
                        <legend><b>{{$course->title}}</b> </legend>
                        <div class="mb-3">
                            <label for="title" class="form-label">Descripción</label>
                            <textarea name="description" id="description" class="form-control" rows="5">{{ $course->title}}
                            </textarea>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Precio</label>
                            <input type="text" id="price" class="form-control" value="{{ $course->price}}" >
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Imagen</label>
                            <img src="{{ asset($course->image)}}" alt="" width="550" height="400">
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div> --}}
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-6">
                <div class="float-sm-start mb-2">
                    <h2><b>{{ $pageName }} | {{ $componentName }}</b></h2>
                </div>
                <div class="float-sm-end mb-2">
                    <a href="{{ route('courses.index') }}" class="btn btn-success btn-sm">Volver</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="float-sm-start mb-2">
                    <h2><b>MÓDULOS</b></h2>
                </div>
                <div class="float-sm-end mb-2">
                    <a href="{{ route('modules.create') }}" class="btn btn-primary btn-sm">Nuevo</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <form>
                    <fieldset disabled>
                        <legend><b>{{ $course->title }}</b></legend>
                        <div class="mb-3">
                            <label for="title" class="form-label">Descripción</label>
                            <textarea name="description" id="description" class="form-control" rows="5">{{ $course->title }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Precio</label>
                            <input type="text" id="price" class="form-control" value="{{ $course->price }}">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Imagen</label>
                            <img src="{{ asset($course->image) }}" alt="" width="550" height="400">
                        </div>
                    </fieldset>
                </form>
            </div>

            <div class="col-lg-6">
                
            </div>
        </div>
    </div>

@endsection
