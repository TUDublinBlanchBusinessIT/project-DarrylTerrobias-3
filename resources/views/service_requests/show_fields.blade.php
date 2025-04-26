<!-- Member ID Field -->
<div class="form-group">
    {!! Form::label('memberid', 'Customer (Member ID):') !!}
    <p class="form-control-static">{!! $serviceRequest->memberid !!}</p>
</div>

<!-- Device Description Field -->
<div class="form-group">
    {!! Form::label('device_description', 'Device Description:') !!}
    <p class="form-control-static">{!! $serviceRequest->device_description !!}</p>
</div>

<!-- Issue Reported Field -->
<div class="form-group">
    {!! Form::label('issue_reported', 'Issue Reported:') !!}
    <p class="form-control-static">{!! $serviceRequest->issue_reported !!}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p class="form-control-static">{!! $serviceRequest->status !!}</p>
</div>

<!-- Assigned To Admin ID Field -->
<div class="form-group">
    {!! Form::label('assigned_to_admin_id', 'Assigned To Admin (ID):') !!}
    <p class="form-control-static">{!! $serviceRequest->assigned_to_admin_id !!}</p>
</div>
