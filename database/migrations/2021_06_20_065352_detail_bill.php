<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DetailBill extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_bill', function (Blueprint $table) {
            $table->increments('Id_Detail');
             $table->unsignedInteger('Id_Book');
             $table->foreign('Id_Book')->references('Id_Book')->on('book');

             $table->unsignedInteger('Id_Subject');
             $table->foreign('Id_Subject')->references('Id_Subject')->on('subject');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_bill');
    }
}
