<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StaffMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('staff_master', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('staff_fname');
            $table->string('staff_mname');
            $table->string('staff_lname');
            $table->string('staff_email');
            $table->string('staff_password');
            $table->string('staff_phone')->unique();
			$table->bigInteger('staff_univ_id');
			$table->bigInteger('staff_inst_id');
			$table->bigInteger('inst_univ_id');
            $table->boolean('is_active')->default(true);
			$table->dateTime('created_at')->nullable();
            $table->string('created_ip')->nullable();   
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
