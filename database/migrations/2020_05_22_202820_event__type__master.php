<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EventTypeMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
			 Schema::create('event_type_master', function (Blueprint $table) {
            $table->bigIncrements('evnt_type_id');
            $table->string('evnt_name');           
            $table->string('evnt_desc')->nullable();
            $table->boolean('is_active')->default(true);                    
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
