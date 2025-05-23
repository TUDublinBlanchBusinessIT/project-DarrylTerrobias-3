<!-- Firstname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('firstname', 'Firstname:') !!}
    {!! Form::text('firstname', null, ['class' => 'form-control']) !!}
</div>

<!-- Surname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('surname', 'Surname:') !!}
    {!! Form::text('surname', null, ['class' => 'form-control']) !!}
</div>

<!-- Membertype Field -->
<div class="form-group col-sm-6">
    {!! Form::label('membertype', 'Member Type:') !!}
    {!! Form::select('membertype', [
        'customer' => 'Customer',
        'manager' => 'Manager',
        'admin' => 'Admin',
        'technician' => 'Technician'
    ], null, ['class' => 'form-control', 'placeholder' => 'Select Member Type']) !!}
</div>


<!-- Dateofbirth Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dateofbirth', 'Dateofbirth:') !!}
    {!! Form::date('dateofbirth', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('members.index') !!}" class="btn btn-danger">Cancel</a>
</div>
