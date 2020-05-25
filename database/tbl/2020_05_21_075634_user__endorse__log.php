<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserEndorseLog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('user_endorse_log', function (Blueprint $table) {
            $table->id();           
            $table->string('level_name')->nullable();
			$table->boolean('is_active')->default(true);
            $table->bigInteger('endorsed_level');
            $table->bigInteger('admin_id');          
            $table->dateTime('endorsed_datetime');
			$table->string('endorsed_remark')->nullable();           
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
