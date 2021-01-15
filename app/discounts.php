<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class discounts extends Model
{
    protected $guarded = [];
    protected $casts = [
        'last_updated_at'   => 'datetime',
    ];
    protected $table = 'discounts';
    protected $fillable = [
        'name','one_time_discount','monthly_discount','created_at','updated_at'
    ];

}
