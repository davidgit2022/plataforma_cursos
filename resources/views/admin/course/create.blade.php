@extends('layouts.app')

@section('title', 'Nuevo Curso')

@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12">
                <div class="float-sm-start mb-2">
                    <h2><b>{{ $pageName }} | {{ $componentName }}</b></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form method="POST" action="{{ route('courses.store') }}" enctype="multipart/form-data">
                    @include('admin.course.common.form')
                </form>
            </div>
        </div>
    </div>
@endsection
