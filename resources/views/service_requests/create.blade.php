@extends('layouts.app') {{-- This uses your main layout. If you don’t have layouts, remove this line. --}}

@section('content')
<div class="container">
    <h1>Create Service Request</h1>

    <form method="POST" action="{{ route('service_requests.store') }}">
        @csrf

        {{-- Include the fields you already built --}}
        @include('bookings.fields')

        {{-- Add extra fields if needed --}}
        <div class="form-group col-sm-6">
            <label for="device_description">Device Description:</label>
            <input type="text" name="device_description" class="form-control">
        </div>

        <div class="form-group col-sm-6">
            <label for="issue_reported">Issue Reported:</label>
            <textarea name="issue_reported" class="form-control"></textarea>
        </div>

        <div class="form-group col-sm-6">
            <label for="status">Status:</label>
            <select name="status" class="form-control">
                <option value="pending">Pending</option>
                <option value="in-progress">In Progress</option>
                <option value="completed">Completed</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit Request</button>
    </form>
</div>
@endsection
