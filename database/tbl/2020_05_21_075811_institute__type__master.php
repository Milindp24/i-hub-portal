<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InstituteTypeMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('institute_type_master', function (Blueprint $table) {
            $table->id();           
            $table->string('inst_type_name');
            $table->string('inst_type_shrt_name');			
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
        //
    }
}
