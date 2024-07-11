@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Detalles del Colaborador</h1>
        <div class="card p-4 shadow-sm">
            <div class="mb-3">
                <p class="fw-bold">Nombre:</p>
                <p>{{ $employee->name }}</p>
            </div>
            <div class="mb-3">
                <p class="fw-bold">Tipo de Documento:</p>
                <p>{{ $employee->document_type }}</p>
            </div>
            <div class="mb-3">
                <p class="fw-bold">Documento:</p>
                <p>{{ $employee->document_number }}</p>
            </div>
            <div class="mb-3">
                <p class="fw-bold">Posición:</p>
                <p>{{ $employee->position }}</p>
            </div>
            <div class="mb-3">
                <p class="fw-bold">Departamento:</p>
                <p>{{ $employee->department }}</p>
            </div>
            <div class="d-flex justify-content-between">
                <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
                <a href="{{ route('employees.index') }}" class="btn btn-secondary">Volver</a>
            </div>
        </div>
    </div>
@endsection
