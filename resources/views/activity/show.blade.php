@extends('adminlte::page')

@section('title', 'Mostrar')

@section('content_header')
    <h1>Mostrar</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <h3>Actividad: {{ $activity->activity }}</h3>
            <p><strong>Nombre:</strong> {{ $activity->name }}</p>
            <p><strong>Objetivo:</strong> {{ $activity->objective }}</p>
            <p><strong>Competencia:</strong> {{ $activity->competence }}</p>
            <p><strong>Temario:</strong> {{ $activity->syllabus }}</p>
            <p><strong>Periodo:</strong> {{ $activity->period->long_name }}</p>
            <p><strong>Autorizada:</strong> {{ $activity->authorized }}</p>
            <p><strong>Staff:</strong> {{ $activity->staff->long_name }}</p>
            <p><strong>No. Créditos:</strong> {{ $activity->credits }}</p>

            <a href="{{ route('activities.edit', $activity) }}" class="btn btn-warning">Editar</a>
            <form action="{{ route('activities.destroy', $activity) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar esta actividad?')">Eliminar</button>
            </form>
        </div>
    </div>
    <a href="{{ route('activities.index') }}" class="btn btn-secondary mt-2">Volver a la lista</a>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
