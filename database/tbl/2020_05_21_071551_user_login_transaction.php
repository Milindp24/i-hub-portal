<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserLoginTransaction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_login_transaction', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('log_token')->nullable();
            $table->string('log_session')->nullable();
            $table->boolean('is_active')->default(true);
            $table->dateTime('login_at');
			$table->string('login_ip')->nullable();           
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
