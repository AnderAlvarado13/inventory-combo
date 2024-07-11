@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4 text-center">Asignar Activo a Empleado</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('assignments.store') }}" method="POST" class="bg-light p-4 rounded shadow">
        @csrf
        <div class="mb-3">
            <label for="employee_id" class="form-label">Empleado:</label>
            <select id="employee_id" name="employee_id" class="form-select" required>
                <option value="">Seleccione Empleado</option>
                @foreach($employees as $employee)
                    <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="asset_id" class="form-label">Activo:</label>
            <select id="asset_id" name="asset_id" class="form-select" required>
                <option value="">Seleccione Activo</option>
                @foreach($assets as $asset)
                    <option value="{{ $asset->id }}">{{ $asset->serial_code }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="assigner" class="form-label">Asignador:</label>
            <input type="text" id="assigner" name="assigner" class="form-control" required>
        </div>
        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-success">Asignar</button>
            <a href="{{ route('logs.index') }}" class="btn btn-secondary">Volver a la Lista</a>
            <a href="/" class="btn btn-secondary">Volver</a>
        </div>
    </form>
</div>

@endsection
