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

                    <div class="d-flex flex-row mb-3">
                        <div class="p-2">
                            <a href="{{ route('activities.show', $activity) }}" class="btn btn-info">
                                <i class="fas fa-regular fa-eye"></i>
                            </a>



                        </div>
                    </div>

                        <a href="{{ route('activities.edit', $activity) }}" class="btn btn-warning">Editar</a>

                        <form id="formEliminar{{ $activity->id }}" action="{{ route('activities.destroy', $activity) }}" method="POST" style="display:inline">
                            @method('DELETE')
                            @csrf
                            <button type="button" class="btn btn-danger" onclick="confirmarEliminacion('{{ $activity->id }}')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@stop

@section('css')
    <!-- No olvides incluir el enlace a SweetAlert2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
@stop

@section('js')
    <!-- No olvides incluir el script de SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
        function confirmarEliminacion(activityId) {
            Swal.fire({
                title: '¿Estás seguro?',
                text: 'No podrás revertir esto',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Sí, eliminarlo'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('formEliminar' + activityId).submit();
                }
            });
        }
    </script>
@stop
