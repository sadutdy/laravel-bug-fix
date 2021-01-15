<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enroll extends Model
{
    protected $table = 'enrolls';
    protected $guarded = [];
    protected $casts = [
        'enrolled_at'   => 'datetime',
    ];
    protected $fillable = [
        'course_id','user_id','course_price','payment_id','status','enrolled_at'
    ];
}
