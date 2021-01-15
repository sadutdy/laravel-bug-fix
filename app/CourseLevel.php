<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseLevel extends Model
{
    protected $guarded = [];
    protected $casts = [
        'updated_at'   => 'datetime',
    ];
    protected $table = 'course_level';
    protected $fillable = [
        'name','one_time_discount','monthly_discount','created_at','updated_at'
    ];

}
