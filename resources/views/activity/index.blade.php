@extends('adminlte::page')

@section('title', 'CRUD')

@section('content_header')
@stop

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<div class="row my-4">
    <div class="col-12">
        <h1 class="text-center">Actividades</h1>
        <p class="text-end">
            <a href="{{ route('activities.create') }}">
                <button type="button" class="btn btn-primary" style="margin-right: 5px;">Agregar</button>
            </a>
        </p>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <table id="crud" class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" class="text-center">Nombre</th>
                    <th scope="col" class="text-center">Objetivo</th>
                    <th scope="col" class="text-center">Competencia</th>
                    <th scope="col" class="text-center">Temario</th>
                    <th scope="col" class="text-center">Actividad</th>
                    <th scope="col" class="text-center">Creditos</th>
                    <th scope="col" class="text-center">Staff</th>
                    <th scope="col" class="text-center">Periodo</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($activities as $activity)
                <tr>
                    <td class="text-center">{{ $activity->name}}</td>
                    <td class="text-center">{{ $activity->objective}}</td>
                    <td class="text-center">{{ $activity->competence }}</td>
                    <td class="text-center">{{ $activity->syllabus }}</td>
                    <td class="text-center">{{ $activity->activity }}</td>
                    <td class="text-center">{{ $activity->credits }}</td>
                    <td class="text-center">{{ $activity->st->name }}</td>
                    <td class="text-center">{{ $activity->period->long_name }}</td>
                    <td class="text-center">
                        <div class="d-flex justify-content-center mb-3">
                            <div class="p-2">
                                <a href="{{ route('activities.edit', $activity) }}">
                                    <button type="button" class="btn btn-primary">
                                        <i class="fas fa-pencil-alt"></i>
                                    </button>
                                </a>
                            </div>
                            <div class="p-2">
                                <a href="{{ route('activities.show', $activity) }}">
                                    <button type="button" class="btn btn-success">
                                        <i class="fa-solid fa-eye"></i>
                                    </button>
                                </a>
                            </div>
                            <div class="p-2">
                                <form action="{{ route('activities.destroy', $activity) }}" method="post">
                                    @method("DELETE")
                                    @csrf
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
    <script>
    $(document).ready(function() {
        $('#crud').DataTable({
            "language":{
                "search":   "Buscar",
                "lengthMenu":  "Mostrar _MENU_ inscripciones",
                "info":   "Mostrando página _PAGE_ de _PAGES_",
                "paginate":  {
                    "previous": "Anterior",
                    "next": "Siguiente",
                    "first":   "Primero",
                    "last":  "Ultimo"
                }
            }
        });
    });
    </script>

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://kit.fontawesome.com/839bf29115.js" crossorigin="anonymous"></script>
@stop
