<!-- Member (Customer) Field -->
<div class="form-group col-sm-6">
    {!! Form::label('memberid', 'Customer:') !!}
    {!! Form::select('memberid', $customers, null, ['class' => 'form-control', 'placeholder' => 'Select Customer']) !!}
</div>

<!-- Assigned To Admin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('assigned_to_admin_id', 'Assign to Admin:') !!}
    {!! Form::select('assigned_to_admin_id', $admins, null, ['class' => 'form-control', 'placeholder' => 'Select Admin']) !!}
</div>

<!-- Device Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('device_description', 'Device Description:') !!}
    {!! Form::textarea('device_description', null, ['class' => 'form-control', 'rows' => 3]) !!}
</div>


<!-- Issue Reported Field -->
<div class="form-group col-sm-6">
    {!! Form::label('issue_reported', 'Issue Reported:') !!}
    {!! Form::textarea('issue_reported', null, ['class' => 'form-control', 'rows' => 3]) !!}
</div>


<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::select('status', [
        'pending' => 'Pending',
        'in-progress' => 'In Progress',
        'completed' => 'Completed'
    ], null, ['class' => 'form-control', 'placeholder' => 'Select Status']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('service_requests.index') !!}" class="btn btn-danger">Cancel</a>
</div>
