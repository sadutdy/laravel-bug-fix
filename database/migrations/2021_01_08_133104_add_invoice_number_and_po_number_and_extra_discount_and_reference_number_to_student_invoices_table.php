<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddInvoiceNumberAndPoNumberAndExtraDiscountAndReferenceNumberToStudentInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('student_invoices', function (Blueprint $table) {
            $table->string('payable_amount')->nullable();
            $table->string('invoice_number')->nullable();
            $table->string('po_number')->nullable();
            $table->string('extra_discount')->nullable();
            $table->string('reference_number')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('student_invoices', function (Blueprint $table) {
            $table->dropColumn('payable_amount');
            $table->dropColumn('invoice_number');
            $table->dropColumn('po_number');
            $table->dropColumn('extra_discount');
            $table->dropColumn('reference_number');
        });
    }
}
