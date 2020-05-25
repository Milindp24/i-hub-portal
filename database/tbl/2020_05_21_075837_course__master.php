<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CourseMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_master', function (Blueprint $table) {
            $table->id();            
            $table->string('cors_name');
            $table->string('cors_shrt_name');
            $table->bigInteger('cors_code');  
            $table->bigInteger('cors_acdmct_type');  
            $table->string('cors_type');
			$table->bigInteger('cors_duration');  
			$table->string('cors_study_type');	
			$table->bigInteger('cors_dept_type');  
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
        //
    }
}
