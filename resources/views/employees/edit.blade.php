@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Editar Colaborador</h1>
        <form action="{{ route('employees.update', $employee->id) }}" method="POST" class="card p-4 shadow-sm">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nombre:</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ $employee->name }}" required>
            </div>
            <div class="mb-3">
                <label for="document_type" class="form-label">Tipo de Documento:</label>
                <select id="document_type" name="document_type" class="form-select" required>
                    <option value="">Seleccione un tipo</option>
                    <option value="Pasaporte" {{ $employee->document_type == 'Pasaporte' ? 'selected' : '' }}>Pasaporte</option>
                    <option value="CC" {{ $employee->document_type == 'CC' ? 'selected' : '' }}>CC</option>
                    <option value="NIT" {{ $employee->document_type == 'NIT' ? 'selected' : '' }}>NIT</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="document_number" class="form-label">Número de Documento:</label>
                <input type="number" id="document_number" name="document_number" class="form-control" value="{{ $employee->document_number }}" required>
            </div>
            <div class="mb-3">
                <label for="position" class="form-label">Posición:</label>
                <input type="text" id="position" name="position" class="form-control" value="{{ $employee->position }}" required>
            </div>
            <div class="mb-3">
                <label for="department" class="form-label">Departamento:</label>
                <input type="text" id="department" name="department" class="form-control" value="{{ $employee->department }}" required>
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-success">Actualizar</button>
                <a href="{{ route('employees.index') }}" class="btn btn-secondary">Volver a la Lista</a>
            </div>
        </form>
    </div>
@endsection


