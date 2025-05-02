<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Product
 * @package App\Models
 * @version May 2, 2025, 2:30 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $sales
 * @property string $name
 * @property string $category
 * @property string $brand
 * @property number $price
 * @property integer $stock
 * @property integer $warranty_years
 */
class Product extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'product';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'category',
        'brand',
        'price',
        'stock',
        'warranty_years'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'category' => 'string',
        'brand' => 'string',
        'price' => 'decimal:2',
        'stock' => 'integer',
        'warranty_years' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'nullable|string|max:50',
        'category' => 'nullable|string|max:30',
        'brand' => 'nullable|string|max:30',
        'price' => 'nullable|numeric',
        'stock' => 'nullable|integer',
        'warranty_years' => 'nullable|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function sales()
    {
        return $this->hasMany(\App\Models\Sale::class, 'productid');
    }
}
