<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class member
 * @package App\Models
 * @version April 24, 2025, 3:09 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $sales
 * @property \Illuminate\Database\Eloquent\Collection $serviceRequests
 * @property \Illuminate\Database\Eloquent\Collection $serviceRequest1s
 * @property string $firstname
 * @property string $surname
 * @property string $membertype
 * @property string $dateofbirth
 */
class member extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'member';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'firstname',
        'surname',
        'membertype',
        'dateofbirth'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'firstname' => 'string',
        'surname' => 'string',
        'membertype' => 'string',
        'dateofbirth' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'firstname' => 'nullable|string|max:30',
        'surname' => 'nullable|string|max:30',
        'membertype' => 'nullable|string|max:15',
        'dateofbirth' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function sales()
    {
        return $this->hasMany(\App\Models\Sale::class, 'memberid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function serviceRequests()
    {
        return $this->hasMany(\App\Models\ServiceRequest::class, 'memberid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function serviceRequest1s()
    {
        return $this->hasMany(\App\Models\ServiceRequest::class, 'assigned_to_admin_id');
    }
}
