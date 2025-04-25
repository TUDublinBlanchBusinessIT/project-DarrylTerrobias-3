@extends('layouts.app') {{-- If you’re using layout --}}

@section('content')
<div class="container">
    <h1>All Service Requests</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Customer</th>
                <th>Device</th>
                <th>Issue</th>
                <th>Status</th>
                <th>Assigned Admin</th>
            </tr>
        </thead>
        <tbody>
            @foreach($requests as $request)
            <tr>
                <td>{{ $request->id }}</td>
                <td>{{ $request->memberid }}</td>
                <td>{{ $request->device_description }}</td>
                <td>{{ $request->issue_reported }}</td>
                <td>{{ $request->status }}</td>
                <td>{{ $request->assigned_to_admin_id }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
