@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Crear Activo de la Empresa</h1>
        <form action="{{ route('company_assets.store') }}" method="POST" class="bg-light p-4 rounded shadow">
            @csrf
            <div class="mb-3">
                <label for="serial_code" class="form-label">Código Serial:</label>
                <input type="text" id="serial_code" name="serial_code" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="trademark" class="form-label">Marca:</label>
                <input type="text" id="trademark" name="trademark" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="reference" class="form-label">Referencia:</label>
                <input type="text" id="reference" name="reference" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descripción:</label>
                <textarea id="description" name="description" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label for="employee_id" class="form-label">Asignar a Empleado:</label>
                <select id="employee_id" name="employee_id" class="form-select">
                    <option value="">Ninguno</option>
                    @foreach($employees as $employee)
                        <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Crear</button>
                <a href="{{ route('company_assets.index') }}" class="btn btn-secondary">Volver</a>
            </div>
        </form>
    </div>
@endsection

