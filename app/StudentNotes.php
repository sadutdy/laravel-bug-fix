<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentNotes extends Model
{
    protected $guarded = [];
    protected $casts = [
        'updated_at'   => 'datetime',
    ];
    protected $table = 'student_notes';
    protected $fillable = [
        'user_id','notes','created_at','updated_at'
    ];
}
