<?php

namespace App;
use App\Course;

use Illuminate\Database\Eloquent\Model;

class leads extends Model
{
    protected $table = 'leads';
    protected $fillable = [
        'fname','lname','email','phone','course','aw_body','message','source','manager','l_status','follow_up','created_at', 'updated_at'
    ];
    public function course_details(){
        return $this->belongsTo(Course::class, 'course');
    }
}
