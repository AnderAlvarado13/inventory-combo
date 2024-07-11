@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Crear Colaborador</h1>
        <form action="{{ route('employees.store') }}" method="POST" class="bg-light p-4 rounded shadow">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nombre:</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="document_type" class="form-label">Tipo de documento:</label>
                <select id="document_type" name="document_type" class="form-select" required>
                    <option value="">Seleccione un tipo</option>
                    <option value="Pasaporte">Pasaporte</option>
                    <option value="CC">CC</option>
                    <option value="NIT">NIT</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="document_number" class="form-label">Documento:</label>
                <input type="number" id="document_number" name="document_number" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="position" class="form-label">Posición:</label>
                <input type="text" id="position" name="position" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="department" class="form-label">Departamento:</label>
                <input type="text" id="department" name="department" class="form-control" required>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Crear</button>
            </div>
        </form>
    </div>
@endsection
