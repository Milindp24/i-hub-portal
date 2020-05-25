<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VCMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('v_c_master', function (Blueprint $table) {
            $table->id();           
            $table->string('vc_fname');
            $table->string('vc_mname');
            $table->string('vc_lname');
            $table->string('vc_email');         
            $table->string('vc_phone')->unique();
			$table->bigInteger('vc_univ_id');			
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
