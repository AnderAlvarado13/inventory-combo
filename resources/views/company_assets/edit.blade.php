@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Editar Activo de la Empresa</h1>
        <form action="{{ route('company_assets.update', $companyAsset->id) }}" method="POST" class="card p-4 shadow-sm">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="serial_code" class="form-label">Código Serial:</label>
                <input type="text" id="serial_code" name="serial_code" class="form-control" value="{{ $companyAsset->serial_code }}" required>
            </div>
            <div class="mb-3">
                <label for="trademark" class="form-label">Marca:</label>
                <input type="text" id="trademark" name="trademark" class="form-control" value="{{ $companyAsset->trademark }}" required>
            </div>
            <div class="mb-3">
                <label for="reference" class="form-label">Referencia:</label>
                <input type="text" id="reference" name="reference" class="form-control" value="{{ $companyAsset->reference }}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descripción:</label>
                <textarea id="description" name="description" class="form-control">{{ $companyAsset->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="employee_id" class="form-label">Asignar a Empleado:</label>
                <select id="employee_id" name="employee_id" class="form-select">
                    <option value="">Ninguno</option>
                    @foreach($employees as $employee)
                        <option value="{{ $employee->id }}" {{ $companyAsset->employee_id == $employee->id ? 'selected' : '' }}>{{ $employee->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-success">Actualizar</button>
                <a href="{{ route('company_assets.index') }}" class="btn btn-secondary">Volver a la Lista</a>
            </div>
        </form>
    </div>
@endsection

