@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="text-center">
            <h1 class="display-4 card-title pricing-card-title font-weight-bold text-dark">Inventario Comboplay</h1>
        </div>
        <div class="row row-cols-1 row-cols-md-3 mb-3 mt-5 text-center">
            <div class="col">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4 class="my-0 fw-normal">Manejo de Colaboradores</h4>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('employees.index') }}" class="w-100 btn  btn-primary">Acceder</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4 class="my-0 fw-normal">Manejo de Activos</h4>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('company_assets.index') }}" class="w-100 btn  btn-primary">Acceder</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4 class="my-0 fw-normal">Asignar Activo a Empleado</h4>
                    </div>
                    <div class="card-body">
                        <a href="{{  route('assignments.create') }}" class="w-100 btn  btn-primary">Acceder</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
            <div class="col">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4 class="my-0 fw-normal">Conteo de Activos por Empleado</h4>
                    </div>
                    <div class="card-body">
                        @foreach($assetsByEmployee as $employee)
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>
                                Empleado: <small class="text-muted">{{ $employee->name }}</small>
                                Activos: <small class="text-muted">{{ $employee->company_assets_count }}</small>
                            </li>
                        </ul>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4 class="my-0 fw-normal">Departamento con Menos Activos</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">{{ $departmentWithLeastAssets }}</h1>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4 class="my-0 fw-normal">Reporte de Inventario</h4>
                    </div>
                    <div class="card-body">
                        @foreach($inventoryReport as $asset)
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>
                                Serial: <small class="text-muted">{{ $asset->serial_code }}</small>
                                Marca: <small class="text-muted">{{ $asset->trademark }}</small>
                                Empleado: <small class="text-muted">{{ $asset->employee ? $asset->employee->name : 'Sin Asignar' }}</small>
                            </li>
                        </ul>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- <div class="container mt-5">
        <h2 class="mb-4 text-center">Conteo de Activos por Empleado</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre del Empleado</th>
                    <th>Conteo de Activos</th>
                </tr>
            </thead>
            <tbody>
                @foreach($assetsByEmployee as $employee)
                    <tr>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->company_assets_count }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h2 class="mt-5 mb-4 text-center">Departamento con Menos Activos</h2>
        <p class="text-center">{{ $departmentWithLeastAssets }}</p>

        <h2 class="mt-5 mb-4 text-center">Reporte de Inventario</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Código Serial del Activo</th>
                    <th>Marca del Activo</th>
                    <th>Nombre del Empleado</th>
                </tr>
            </thead>
            <tbody>
                @foreach($inventoryReport as $asset)
                    <tr>
                        <td>{{ $asset->serial_code }}</td>
                        <td>{{ $asset->trademark }}</td>
                        <td>{{ $asset->employee ? $asset->employee->name : 'Sin Asignar' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div> -->
@endsection
