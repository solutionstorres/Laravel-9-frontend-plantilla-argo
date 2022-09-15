<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Region
 *
 * @property $id
 * @property $region
 * @property $abbreviation
 * @property $capital
 * @property $created_at
 * @property $updated_at
 *
 * @property Province[] $provinces
 * @property Tariff[] $tariffs
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Region extends Model
{
    
    static $rules = [
		'region' => 'required',
		'abbreviation' => 'required',
		'capital' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['region','abbreviation','capital'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function provinces()
    {
        return $this->hasMany('App\Models\Province', 'region_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tariffs()
    {
        return $this->hasMany('App\Models\Tariff', 'region_id', 'id');
    }
    

}
