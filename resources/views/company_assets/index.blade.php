@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card my-4">
        <div class="card-header">
            <h1 class="card-title text-center">Activos de la Empresa</h1>
        </div>
        <div class="card-body">
            <div class="mb-3 text-end">
                <a href="{{ route('company_assets.create') }}" class="btn btn-primary mb-3">Añadir Nuevo Activo</a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Código Serial</th>
                            <th>Marca</th>
                            <th>Referencia</th>
                            <th>Descripción</th>
                            <th>Empleado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($companyAssets as $asset)
                            <tr>
                                <td>{{ $asset->serial_code }}</td>
                                <td>{{ $asset->trademark }}</td>
                                <td>{{ $asset->reference }}</td>
                                <td>{{ $asset->description }}</td>
                                <td>{{ $asset->employee ? $asset->employee->name : 'No Asignado' }}</td>
                                <td>
                                    <a href="{{ route('company_assets.show', $asset->id) }}" class="btn btn-info btn-sm">Ver</a>
                                    <a href="{{ route('company_assets.edit', $asset->id) }}" class="btn btn-warning btn-sm">Editar</a>
                                    <form action="{{ route('company_assets.destroy', $asset->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                    </form>
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
