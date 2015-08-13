<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('attendences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('report_id')->references('id')->on('reports')->onDelete('cascade');
            $table->string('work_type')->references('id')->on('work_types')->onDelete('cascade');;
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
         Schema::drop('attendences');
    }
}
