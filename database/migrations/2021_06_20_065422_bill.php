<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Bill extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill', function (Blueprint $table) {
            $table->increments('Id_Bill');
             $table->unsignedInteger('Id_Detail');
             $table->foreign('Id_Detail')->references('Id_Detail')->on('detail_bill');
             $table->unsignedInteger('Id_Student');
             $table->foreign('Id_Student')->references('Id_Student')->on('student');
            $table->datetime('Time');
            $table->tinyinteger('Status'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('bill');
    }
}
