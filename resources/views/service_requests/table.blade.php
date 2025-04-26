<table class="table table-responsive" id="serviceRequests-table">
    <thead>
        <th>Memberid</th>
        <th>Device Description</th>
        <th>Issue Reported</th>
        <th>Status</th>
        <th>Assigned To Admin Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($serviceRequests as $serviceRequest)
        <tr>
            <td>{!! $serviceRequest->memberid !!}</td>
            <td>{!! $serviceRequest->device_description !!}</td>
            <td>{!! $serviceRequest->issue_reported !!}</td>
            <td>{!! $serviceRequest->status !!}</td>
            <td>{!! $serviceRequest->assigned_to_admin_id !!}</td>
            <td>
                {!! Form::open(['route' => ['service_requests.destroy', $serviceRequest->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('service_requests.show', [$serviceRequest->id]) !!}" class='btn btn-default btn-xs'>
                        <i class="far fa-eye"></i>
                    </a>
                    <a href="{!! route('service_requests.edit', [$serviceRequest->id]) !!}" class='btn btn-default btn-xs'>
                        <i class="far fa-edit"></i>
                    </a>
                    {!! Form::button('<i class="far fa-trash-alt"></i>', [
                        'type' => 'submit',
                        'class' => 'btn btn-danger btn-xs',
                        'onclick' => "return confirm('Are you sure?')"
                    ]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
