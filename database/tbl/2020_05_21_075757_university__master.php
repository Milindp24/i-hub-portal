<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UniversityMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('university_master', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('admin_id');
            $table->string('univ_name');
            $table->string('univ_shrt_name');
            $table->string('univ_aishe');
            $table->string('univ_phone')->unique();;
			$table->string('univ_website');            
            $table->string('univ_address');
            $table->bigInteger('univ_district_id');  
            $table->bigInteger('univ_pin');  
			$table->string('univ_district');           
            $table->date('univ_establish_date');
            $table->date('univ_establish_no');		
			$table->bigInteger('univ_vc_id');
			$table->bigInteger('univ_registar_id');
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
