<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InstituteMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('institute_master', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('admin_id');
            $table->string('inst_name');
            $table->string('inst_shrt_name');
            $table->string('inst_aishe');
            $table->string('inst_phone')->unique();;
			$table->string('inst_website');            
            $table->string('inst_address');
            $table->bigInteger('inst_district_id');  
            $table->bigInteger('inst_pin');  
			$table->bigInteger('inst_uni_id');
			$table->bigInteger('inst_type_id');
			$table->string('inst_district');           
            $table->date('inst_establish_date');
            $table->date('inst_establish_id');					
			$table->bigInteger('inst_principal_id');
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
