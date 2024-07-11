@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4 text-center">Detalles del Log</h1>
    <div class="card p-4 shadow-sm">
        <div class="mb-3">
            <p class="fw-bold">Activo:</p>
            <p>{{ $log->asset->serial_code }}</p>
        </div>
        <div class="mb-3">
            <p class="fw-bold">Empleado:</p>
            <p>{{ $log->employee->name }}</p>
        </div>
        <div class="mb-3">
            <p class="fw-bold">Asignador:</p>
            <p>{{ $log->assigner }}</p>
        </div>
        <div class="mb-3">
            <p class="fw-bold">Payload:</p>
            <pre class="bg-light p-3 rounded">{{ json_encode(json_decode($log->payload), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) }}</pre>
        </div>
        <div class="mb-3">
            <p class="fw-bold">Fecha y Hora:</p>
            <p>{{ $log->created_at }}</p>
        </div>
        <div class="text-center">
            <a href="{{ route('logs.index') }}" class="btn btn-secondary">Volver a la Lista</a>
        </div>
    </div>
</div>
@endsection
