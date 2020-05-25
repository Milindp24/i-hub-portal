<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticeDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notice_details', function (Blueprint $table) {
            $table->bigIncrements('notice_id');
            $table->bigInteger('notice_type_id');
            $table->bigInteger('admin_id');
            $table->string('notice_name');
            $table->string('notice_details');
            $table->date('from_date');
            $table->date('to_date');
            $table->string('web_url')->nullable();
            $table->string('img_url')->nullable();
            $table->string('file_url')->nullable();
            $table->string('created_ip')->nullable();
            $table->boolean('is_active')->default(true);
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
        Schema::dropIfExists('notice_details');
    }
}
