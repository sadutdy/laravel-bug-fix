<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOnlineWorkshopsAndIncludedAndAssessmentAndEntryRequirementsAndDurationAndProgressionAndYGainQualificationToCourses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->longText('online_workshops')->nullable();
            $table->longText('included')->nullable();
            $table->longText('assessment')->nullable();
            $table->longText('entry_requirements')->nullable();
            $table->longText('duration')->nullable();
            $table->longText('progression')->nullable();
            $table->longText('y_gain_qualification')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn('online_workshops');
            $table->dropColumn('included'); 
            $table->dropColumn('assessment');
            $table->dropColumn('entry_requirements'); 
            $table->dropColumn('duration');
            $table->dropColumn('progression'); 
            $table->dropColumn('y_gain_qualification');
        });
    }
}
