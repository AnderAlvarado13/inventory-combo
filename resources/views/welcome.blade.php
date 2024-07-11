@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="text-center">
            <h1 class="display-4">Inventario Comboplay</h1>
        </div>
        <div class="row row-cols-1 row-cols-md-3 mb-3 mt-5 text-center">
            <div class="col">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4 class="my-0 fw-normal">Manejo de Colaboradores</h4>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('employees.index') }}" class="w-100 btn btn-lg btn-primary">Acceder</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4 class="my-0 fw-normal">Manejo de Activos</h4>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('company_assets.index') }}" class="w-100 btn btn-lg btn-primary">Acceder</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4 class="my-0 fw-normal">Vista de Logs</h4>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('logs.index') }}" class="w-100 btn btn-lg btn-primary">Acceder</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
