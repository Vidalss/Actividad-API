@extends('adminlte::page')

@section('title', 'Inscripción')

@section('content_header')
@stop

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="bg-white rounded p-4 border border-2 border-dark">
                <h1 class="text-center h3">Registrar tu actividad</h1>

                @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif

                <form action="{{ route('activities.store') }}" method="POST" novalidate>
                    @csrf

                    <!--Name-->
                    <div class="mb-3">
                        <div class="input-group">
                            <input
                                id="name"
                                name="name"
                                class="form-control form-control-lg"
                                placeholder="Nombre"
                                value="{{ old('name') }}"
                        </div>

                        <!--Objective-->
                        <div class="mb-3">
                            <div class="input-group">
                                <input
                                    id="objective"
                                    name="objective"
                                    class="form-control form-control-lg"
                                    placeholder="Objetivo"
                                    value="{{ old('objective') }}"
                            </div>

                            <!--Competence-->
                            <div class="mb-3">
                                <div class="input-group">
                                    <input
                                        id="competence"
                                        name="competence"
                                        class="form-control form-control-lg"
                                        placeholder="Competencia"
                                        value="{{ old('competence') }}"
                                </div>

                                <!--Syllabus-->
                                <div class="mb-3">
                                    <div class="input-group">
                                        <input
                                            id="syllabus"
                                            name="syllabus"
                                            class="form-control form-control-lg"
                                            placeholder="Temario"
                                            value="{{ old('syllabus') }}"
                                    </div>

                                        <!--Activity-->
                                        <div class="mb-3">
                                            <div class="input-group">
                                                <input
                                                    id="activity"
                                                    name="activity"
                                                    class="form-control form-control-lg"
                                                    placeholder="Actividad"
                                                    value="{{ old('activity') }}"
                                            </div>

                                            <!--Credits-->
                                            <div class="mb-3">
                                                <div class="input-group">
                                                    <input
                                                        id="credits"
                                                        name="credits"
                                                        class="form-control form-control-lg"
                                                        placeholder="Creditos"
                                                        value="{{ old('credits') }}"
                                                        type="number"
                                                        inputmode="numeric"
                                                </div>

                                                <!--Staff-->
                                                <div class="mb-3">
                                                    <div class="input-group">
                                                        <select class="form-select form-select-lg form-control" name="staff_id">
                                                            <option selected>Staff</option>
                                                            @foreach ($staff as $st)
                                                                <option value="{{ $st->id }}">{{ $st->long_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    @error('period_id')
                                                        <div class="text-danger text-center">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>

                                                        <!--Period-->
                                                        <div class="mb-3">
                                                            <div class="input-group">
                                                                <select class="form-select form-select-lg form-control" name="period_id">
                                                                    <option selected>Periodo</option>
                                                                    @foreach ($periods as $period)
                                                                        <option value="{{ $period->id }}">{{ $period->long_name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            @error('period_id')
                                                                <div class="text-danger text-center">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop
