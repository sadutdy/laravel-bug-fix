<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillingDetails extends Model
{
    protected $guarded = [];
    protected $casts = [
        'updated_at'   => 'datetime',
    ];
    protected $table = 'billing_details';
    protected $fillable = [
        'name','contact','email','address','street','city','postcode','country','user_id','purchase_id'
    ];
    public function countrydtls(){
        return $this->belongsTo(Country::class, 'country');
    }
}
