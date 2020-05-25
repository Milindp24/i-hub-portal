<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StudentEducationDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_education_details', function (Blueprint $table) {
            // $table->id();
            $table->bigIncrements('std_edu_id');
            $table->bigInteger('user_id');
            $table->bigInteger('univ_id');
            $table->bigInteger('inst_id');
            $table->bigInteger('course_id');
            $table->bigInteger('course_type');
            $table->bigInteger('enrolled_year');			
            $table->string('enrollment_number')->nullable();          
            $table->boolean('is_active')->default(true);
            $table->boolean('is_passout')->default(false);
            $table->dateTime('last_modify_at');
			$table->string('last_modify_ip')->nullable();           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_education_details');
    }
}
