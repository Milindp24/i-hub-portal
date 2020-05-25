<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IHubMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('i_hub_master', function (Blueprint $table) {
            $table->id();           
            $table->bigInteger('admin_id');
            $table->string('ihub_name');
            $table->string('ihub_full_name');         
            $table->string('ihub_phone')->unique();;
			$table->string('ihub_website');            
            $table->string('ihub_address');
            $table->bigInteger('ihub_district_id');  
            $table->bigInteger('ihub_pin');  
            $table->string('ihub_coordinator_name');
            $table->string('ihub_coordinator_phone');
            $table->string('ihub_coordinator_email');
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
