<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id');
            $table->integer('vertoning_id');
            $table->integer('stoel_id');
            $table->tinyInteger('gebruikt');
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
        Schema::dropIfExists('tbl_tickets');
    }
}
