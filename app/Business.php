<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'long', 'lat', 'address_line_1', 'address_line_2', 'surbub', 'city', 'postal_code', 'opens', 'closes', 'category_id', 'visits'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        //
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'address_line_1' => 'string',
        'address_line_2' => 'string',
        'surbub' => 'string',
        'city' => 'string',
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp'
    ];

    /**
     * Get the Category for the Business.
     */
    public function category()
    {
        return $this->belongsTo(\App\Category::class);
    }

}