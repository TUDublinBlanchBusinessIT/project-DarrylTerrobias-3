<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceRequest extends Model
{
    use HasFactory;

    protected $table = 'service_request'; // matches your SQL table name

    public $timestamps = false; // unless you are auto-managing created_at/updated_at

    protected $fillable = [
        'memberid',
        'device_description',
        'issue_reported',
        'status',
        'assigned_to_admin_id',
        'created_at',
        'updated_at',
    ];
}
