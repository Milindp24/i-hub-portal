<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RegistarMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
         Schema::create('registar_master', function (Blueprint $table) {
            $table->id();           
            $table->string('reg_fname');
            $table->string('reg_mname');
            $table->string('reg_lname');
            $table->string('reg_email');         
            $table->string('reg_phone')->unique();
			$table->bigInteger('reg_univ_id');			
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
