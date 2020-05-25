<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EventDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_details', function (Blueprint $table) {
            $table->bigIncrements('evnt_id');                    
            $table->bigInteger('evnt_type_id');
            $table->bigInteger('admin_id');
            $table->string('event_name');
            $table->string('event_desc');
            $table->string('evnt_venue');
            $table->date('evnt_date');
            $table->time('evnt_from');
            $table->time('evnt_to');
            $table->string('std_img_url')->nullable();
            $table->string('banner_img_url')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('web_url')->nullable();
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
        Schema::dropIfExists('event_details');
    }
}
