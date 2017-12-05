<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblStoelenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_stoelen', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('stoel_id');
            $table->integer('zaal_id');
            $table->integer('stoelnummer');
            $table->integer('rijnummer');
            $table->tinyInteger('bezet');
            $table->integer('vertoning_id');
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
        Schema::dropIfExists('tbl_stoelen');
    }
}
