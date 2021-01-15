<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentRecord extends Model
{
    protected $guarded = [];
    protected $casts = [
        'updated_at'   => 'datetime',
    ];
    protected $table = 'payment_records';
    protected $fillable = [
        'user_id','payment_id','student_invoice_id','amount_paid','due','payment_mode','reference','notes','attachment_url','payment_date','created_at','updated_at'
    ];
}
