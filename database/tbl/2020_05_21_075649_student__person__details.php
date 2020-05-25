<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StudentPersonDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('student_person_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('fname');
            $table->string('mname');
            $table->string('lname');
            $table->date('date_of_birth');
			$table->string('address');
            $table->bigInteger('city_id');
            $table->bigInteger('pincode');
            $table->string('mobile_num')->unique();
            $table->string('gender');
            $table->string('facebook_id')->nullable();
            $table->string('insta_id')->nullable();
            $table->string('linkedin_id')->nullable();
            $table->string('tweeter_id')->nullable();
            $table->boolean('is_active')->default(true);
            $table->dateTime('last_modify_at')->nullable();
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
        //
    }
}
