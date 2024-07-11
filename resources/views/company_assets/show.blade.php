@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Detalles del Activo de la Empresa</h1>
        <div class="card p-4 shadow-sm">
            <div class="mb-3">
                <p class="fw-bold">Código Serial:</p>
                <p>{{ $companyAsset->serial_code }}</p>
            </div>
            <div class="mb-3">
                <p class="fw-bold">Marca:</p>
                <p>{{ $companyAsset->trademark }}</p>
            </div>
            <div class="mb-3">
                <p class="fw-bold">Referencia:</p>
                <p>{{ $companyAsset->reference }}</p>
            </div>
            <div class="mb-3">
                <p class="fw-bold">Descripción:</p>
                <p>{{ $companyAsset->description }}</p>
            </div>
            <div class="mb-3">
                <p class="fw-bold">Asignado a:</p>
                <p>{{ $companyAsset->employee ? $companyAsset->employee->name : 'No Asignado' }}</p>
            </div>
            <div class="d-flex justify-content-between">
                <a href="{{ route('company_assets.edit', $companyAsset->id) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('company_assets.destroy', $companyAsset->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
                <a href="{{ route('company_assets.index') }}" class="btn btn-secondary">Volver a la Lista</a>
            </div>
        </div>
    </div>
@endsection


