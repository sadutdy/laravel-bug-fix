<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class agents extends Model
{
    protected $fillable = [
        'name','email','phone','other'
    ];
}
