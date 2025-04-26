<?php

namespace App\Repositories;

use App\Models\ServiceRequest;
use App\Repositories\BaseRepository;

/**
 * Class ServiceRequestRepository
 * @package App\Repositories
 * @version April 26, 2025, 5:33 pm UTC
*/

class ServiceRequestRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'memberid',
        'device_description',
        'issue_reported',
        'status',
        'assigned_to_admin_id'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ServiceRequest::class;
    }
}
