@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header text-center">
            <h1 class="card-title mb-0">Logs</h1>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>Activo</th>
                            <th>Empleado</th>
                            <th>Asignador</th>
                            <th>Fecha y Hora</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($logs as $log)
                            <tr>
                                <td>{{ $log->asset->serial_code }}</td>
                                <td>{{ $log->employee->name }}</td>
                                <td>{{ $log->assigner }}</td>
                                <td>{{ $log->created_at }}</td>
                                <td>
                                    <a href="{{ route('logs.show', $log->id) }}" class="btn btn-info btn-sm">Ver Detalles</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
