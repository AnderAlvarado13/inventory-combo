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
            <select id="department" name="department" class="form-select" required>
                <option value="">Seleccione un departamento</option>
                <option value="Amazonas">Amazonas</option>
                <option value="Antioquia">Antioquia</option>
                <option value="Arauca">Arauca</option>
                <option value="Atlántico">Atlántico</option>
                <option value="Bolívar">Bolívar</option>
                <option value="Boyacá">Boyacá</option>
                <option value="Caldas">Caldas</option>
                <option value="Caquetá">Caquetá</option>
                <option value="Casanare">Casanare</option>
                <option value="Cauca">Cauca</option>
                <option value="Cesar">Cesar</option>
                <option value="Chocó">Chocó</option>
                <option value="Córdoba">Córdoba</option>
                <option value="Cundinamarca">Cundinamarca</option>
                <option value="Guainía">Guainía</option>
                <option value="Guaviare">Guaviare</option>
                <option value="Huila">Huila</option>
                <option value="La Guajira">La Guajira</option>
                <option value="Magdalena">Magdalena</option>
                <option value="Meta">Meta</option>
                <option value="Nariño">Nariño</option>
                <option value="Norte de Santander">Norte de Santander</option>
                <option value="Putumayo">Putumayo</option>
                <option value="Quindío">Quindío</option>
                <option value="Risaralda">Risaralda</option>
                <option value="San Andrés y Providencia">San Andrés y Providencia</option>
                <option value="Santander">Santander</option>
                <option value="Sucre">Sucre</option>
                <option value="Tolima">Tolima</option>
                <option value="Valle del Cauca">Valle del Cauca</option>
                <option value="Vaupés">Vaupés</option>
                <option value="Vichada">Vichada</option>
            </select>
        </div>

        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary">crear</button>
            <a href="{{ route('employees.index') }}" class="btn btn-secondary">Volver</a>
        </div>
    </form>
</div>

@endsection
