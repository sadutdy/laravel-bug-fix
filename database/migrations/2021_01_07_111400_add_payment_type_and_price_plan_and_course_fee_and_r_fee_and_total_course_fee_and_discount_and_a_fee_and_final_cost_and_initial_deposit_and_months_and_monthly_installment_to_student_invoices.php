<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPaymentTypeAndPricePlanAndCourseFeeAndRFeeAndTotalCourseFeeAndDiscountAndAFeeAndFinalCostAndInitialDepositAndMonthsAndMonthlyInstallmentToStudentInvoices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('student_invoices', function (Blueprint $table) {
            $table->string('payment_type')->nullable();
            $table->string('price_plan')->nullable();
            $table->string('course_fee')->nullable();
            $table->string('r_fee')->nullable();
            $table->string('total_course_fee')->nullable();
            $table->string('discount')->nullable();
            $table->string('a_fee')->nullable();
            $table->string('final_cost')->nullable();
            $table->string('initial_deposit')->nullable();
            $table->string('months')->nullable();
            $table->string('monthly_installment')->nullable();
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
            $table->dropColumn('payment_type');
            $table->dropColumn('price_plan');
            $table->dropColumn('course_fee');
            $table->dropColumn('r_fee');
            $table->dropColumn('total_course_fee');
            $table->dropColumn('discount');
            $table->dropColumn('a_fee');
            $table->dropColumn('final_cost');
            $table->dropColumn('initial_deposit');
            $table->dropColumn('months');
            $table->dropColumn('monthly_installment');

        });
    }
}
