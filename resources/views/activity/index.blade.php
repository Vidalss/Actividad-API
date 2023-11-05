@extends('adminlte::page')

@section('title', 'Lista')

@section('content_header')
    <h1>Lista de Actividades</h1>
@stop

@section('content')

    <a href="{{ route('activities.create') }}" class="btn btn-primary">Nueva Actividad</a>

    @if (session('message'))
        <div class="alert alert-info">{{ session('message') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Actividad</th>
                <th>Nombre</th>
                <th>Objetivo</th>
                <th>Competencia</th>
                <th>Temario</th>
                <th>Periodo</th>
                <th>Autorizada</th>
                <th>Staff</th>
                <th>No. Créditos</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($activities as $activity)
                <tr>
                    <td>{{ $activity->activity }}</td>
                    <td>{{ $activity->name }}</td>
                    <td>{{ $activity->objective }}</td>
                    <td>{{ $activity->competence }}</td>
                    <td>{{ $activity->syllabus }}</td>
                    <td>{{ $activity->period->long_name }}</td>
                    <td>{{ $activity->authorized }}</td>
                    <td>{{ $activity->staff->long_name }} </td>
                    <td>{{ $activity->credits }}</td>
                    <td>
                        <a href="{{ route('activities.show', $activity) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('activities.edit', $activity) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('activities.destroy', $activity) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
