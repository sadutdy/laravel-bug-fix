<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_records', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('payment_id')->nullable();  
            $table->string('student_invoice_id')->nullable();
            $table->string('amount_paid')->nullable();   
            $table->string('due')->nullable();   
            $table->string('payment_mode')->nullable();   
            $table->string('reference_number')->nullable();     
            $table->string('notes')->nullable();       
            $table->string('attachment_url')->nullable();       
            $table->string('payment_date')->nullable();   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment_records');
    }
}
