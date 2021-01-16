<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStudymodeAndRfeeAndAfeeStdidToCourses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->string('blended')->default("1");
            $table->string('online')->default("1");
            $table->decimal('rfee', 16)->nullable();
            $table->decimal('afee', 16)->nullable();
            $table->text('stdId')->nullable();
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
            $table->dropColumn('blended');
            $table->dropColumn('online');
            $table->dropColumn('rfee');
            $table->dropColumn('afee');
            $table->dropColumn('stdId');
        });
    }
}
