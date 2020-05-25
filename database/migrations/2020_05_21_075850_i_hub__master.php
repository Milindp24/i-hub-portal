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
            $table->bigIncrements('ihub_id');
            $table->bigInteger('admin_id');
            $table->string('ihub_crdntr_name');
            $table->string('ihub_crdntr_phone');
            $table->string('ihub_crdntr_image_url');
            $table->string('ihub_crdntr_designation');
            $table->string('ihub_crdntr_email')->unique();     
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
        Schema::dropIfExists('i_hub_master');
    }
}
