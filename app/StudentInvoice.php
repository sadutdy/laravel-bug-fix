<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentInvoice extends Model
{
    protected $guarded = [];
    protected $casts = [
        'updated_at'   => 'datetime',
    ];
    protected $table = 'student_invoices';
    protected $fillable = [
        'user_id','payment_id','course_id','invoice_name','invoice_url','course_name','created_at','updated_at','payment_type','price_plan','course_fee','r_fee','total_course_fee',
        'discount','a_fee','final_cost','initial_deposit','months','monthly_installment','invoice_number','po_number','extra_discount','reference_number','payable_amount'
    ];
    public function payment(){
        return $this->belongsTo(Payment::class, 'payment_id');
    }
    public function courses(){
        return $this->belongsTo(Course::class, 'course_id');
    }
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    
    
  
}
