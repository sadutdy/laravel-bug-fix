<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class course_subject extends Model
{
    protected $guarded = [];
    protected $casts = [
        'last_updated_at'   => 'datetime',
    ];
    protected $table = 'course_subjects';
    protected $fillable = [
        'course_id','unit_no','subject_name','unit_description','created_at','updated_at','TQT','credit'
    ];

    public function course(){
        return $this->belongsTo(Course::class, 'course_id');
    }
   
}
