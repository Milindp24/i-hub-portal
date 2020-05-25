<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EventRegStdDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_reg_std_details', function (Blueprint $table) {
            $table->bigIncrements('reg_std_id');
            $table->bigInteger('evnt_id');
            $table->string('full_name');
            $table->string('gender');
            $table->string('cast_nme');
            $table->string('designation_name');
            $table->string('univ_inst_org_name');
            $table->string('mobile_num');
            $table->string('email_id');
            $table->string('course_name')->nullable();
            $table->string('sem_year_name')->nullable();
            $table->string('branch_name')->nullable();
			$table->boolean('is_endorsed')->default(false);   
			$table->boolean('is_active')->default(true);   
			$table->string('last_ip')->nullable();
            $table->dateTime('last_access_at')->nullable();
			
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
        Schema::dropIfExists('users');
    }
}
