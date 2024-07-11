@extends('layouts.app')

@section('content')
    <h1>Logs</h1>
    <table>
        <thead>
            <tr>
                <th>Asset</th>
                <th>Employee</th>
                <th>Assigner</th>
                <th>Payload</th>
                <th>Timestamp</th>
            </tr>
        </thead>
        <tbody>
            @foreach($logs as $log)
                <tr>
                    <td>{{ $log->asset->serial_code }}</td>
                    <td>{{ $log->employee->name }}</td>
                    <td>{{ $log->assigner }}</td>
                    <td>{{ $log->payload }}</td>
                    <td>{{ $log->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
