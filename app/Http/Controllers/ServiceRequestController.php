<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\ServiceRequest;


class ServiceRequestController extends Controller
{
    
    public function create()
    {
        
        $members = Member::where('membertype', 'customer')->get();

        
        $admins = Member::whereIn('membertype', ['admin', 'manager', 'technician'])->get();


        
        return view('service_requests.create')
            ->with('members', $members)
            ->with('admins', $admins);
    }


    public function store(Request $request)
    {

        $request->validate([
            'memberid' => 'required|exists:member,id',
            'device_description' => 'required|string',
            'issue_reported' => 'required|string',
            'assigned_to_admin_id' => 'required|exists:member,id',
        ]);

        
        $service = new ServiceRequest();
        $service->memberid = $request->memberid;
        $service->device_description = $request->device_description;
        $service->issue_reported = $request->issue_reported;
        $service->status = $request->status;
        $service->assigned_to_admin_id = $request->assigned_to_admin_id;
        $service->created_at = now();
        $service->updated_at = now();
        $service->save();

        return redirect()->route('service_requests.index')->with('success', 'Service request created successfully.');
        
    }

    public function index()
    {
    $requests = \App\Models\ServiceRequest::all();
    return view('service_requests.index', compact('requests'));
    }

}