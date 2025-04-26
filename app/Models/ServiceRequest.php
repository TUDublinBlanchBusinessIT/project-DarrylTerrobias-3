<?php

namespace App\Models;

<<<<<<< HEAD
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ServiceRequest
 * @package App\Models
 * @version April 26, 2025, 5:33 pm UTC
 *
 * @property \App\Models\Member $memberid
 * @property \App\Models\Member $assignedToAdmin
 * @property integer $memberid
 * @property string $device_description
 * @property string $issue_reported
 * @property string $status
 * @property integer $assigned_to_admin_id
 */
class ServiceRequest extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'service_request';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
=======
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceRequest extends Model
{
    use HasFactory;

    protected $table = 'service_request'; // matches your SQL table name

    public $timestamps = false; // unless you are auto-managing created_at/updated_at

    protected $fillable = [
>>>>>>> f56ec654537d400ed7c8f160e0cfe21264f8b8f2
        'memberid',
        'device_description',
        'issue_reported',
        'status',
<<<<<<< HEAD
        'assigned_to_admin_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'memberid' => 'integer',
        'device_description' => 'string',
        'issue_reported' => 'string',
        'status' => 'string',
        'assigned_to_admin_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'memberid' => 'nullable|integer',
        'device_description' => 'nullable|string',
        'issue_reported' => 'nullable|string',
        'status' => 'nullable|string|max:20',
        'assigned_to_admin_id' => 'nullable|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function memberid()
    {
        return $this->belongsTo(\App\Models\Member::class, 'memberid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function assignedToAdmin()
    {
        return $this->belongsTo(\App\Models\Member::class, 'assigned_to_admin_id');
    }
=======
        'assigned_to_admin_id',
        'created_at',
        'updated_at',
    ];
>>>>>>> f56ec654537d400ed7c8f160e0cfe21264f8b8f2
}
