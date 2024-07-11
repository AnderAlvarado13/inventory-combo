@extends('layouts.app')

@section('content')
    <h1>Log Details</h1>
    <p>Asset: {{ $log->asset->serial_code }}</p>
    <p>Employee: {{ $log->employee->name }}</p>
    <p>Assigner: {{ $log->assigner }}</p>
    <p>Payload: {{ $log->payload }}</p>
    <p>Timestamp: {{ $log->created_at }}</p>
    <a href="{{ route('logs.index') }}">Back to List</a>
@endsection
