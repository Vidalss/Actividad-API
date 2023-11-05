@extends('adminlte::page')

@section('title', 'Crear')

@section('content_header')
    <h1>Registra tu actividad</h1>
@stop

@section('content')

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header text text-center">
                <h3>Registrar tu actividad</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('activities.store') }}">
                    @csrf

                    <!-- Actividad -->
                    <div class="form-group">
                        <label for="activity">Actividad</label>
                        <input type="text" name="activity" class="form-control @error('activity') is-invalid @enderror">
                        @error('activity')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <!-- Nombre -->
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <!-- Objetivo -->
                    <div class="form-group">
                        <label for="objective">Objetivo</label>
                        <input type="text" name="objective" class="form-control @error('objective') is-invalid @enderror">
                        @error('objective')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <!-- Competencia -->
                    <div class="form-group">
                        <label for="competence">Competencia</label>
                        <input type="text" name="competence" class="form-control @error('competence') is-invalid @enderror">
                        @error('competence')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <!-- Temario -->
                    <div class="form-group">
                        <label for="syllabus">Temario</label>
                        <input type="text" name="syllabus" class="form-control @error('syllabus') is-invalid @enderror">
                        @error('syllabus')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <!-- Periodo -->
                    <div class="form-group">
                        <label for="period_id">Periodo</label>
                        <select name="period_id" class="form-control @error('period_id') is-invalid @enderror">
                            <option value="">Seleccionar Periodo</option>
                            @foreach ($periods as $period)
                                <option value="{{ $period->id }}">{{ $period->long_name }}</option>
                            @endforeach
                        </select>
                        @error('period_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <!-- Autorizada -->
                    <div class="form-group">
                        <label for="authorized">Autorizada</label>
                        <select name="authorized" class="form-control @error('authorized') is-invalid @enderror">
                            <option value="yes">Sí</option>
                            <option value="no">No</option>
                        </select>
                        @error('authorized')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <!-- Staff -->
                    <div class="form-group">
                        <label for="staff_id">Staff</label>
                        <select name="staff_id" class="form-control @error('staff_id') is-invalid @enderror">
                            <option value="">Seleccionar Staff</option>
                            @foreach ($staffs as $staff)
                                <option value="{{ $staff->id }}">{{ $staff->long_name }}</option>
                            @endforeach
                        </select>
                        @error('staff_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <!-- Créditos -->
                    <div class="form-group">
                        <label for="credits">Créditos</label>
                        <input type="text" name="credits" class="form-control @error('credits') is-invalid @enderror">
                        @error('credits')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Guardar</button>
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
    <script> console.log('Hi!'); </script>
@stop
