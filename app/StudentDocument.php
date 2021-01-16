<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentDocument extends Model
{
    protected $guarded = [];
    protected $casts = [
        'updated_at'   => 'datetime',
    ];
    protected $table = 'student_documents';
    protected $fillable = [
        'user_id','document_name','document_url','type','created_at','updated_at'
    ];

}
