<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdminLogin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('admin_login', function (Blueprint $table) {
            $table->id();           
            $table->string('email')->nullable();
            $table->string('password')->nullable();
			$table->bigInteger('change_count');
			$table->string('hint')->nullable();  
			$table->bigInteger('user_type_id');			
            $table->boolean('is_active')->default(true);
			$table->boolean('is_block')->default(false);
			$table->boolean('is_endorsed')->default(false);
            $table->dateTime('last_access_at');
			$table->string('last_ip')->nullable();        
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
