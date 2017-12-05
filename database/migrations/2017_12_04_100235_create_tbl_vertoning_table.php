<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblVertoningTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_vertoning', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('vertoning_id');
            $table->integer('film_id');
            $table->integer('zaal_id');
            $table->integer('leeftijd_id');
            $table->integer('tijdslot_id');
            $table->date('datum');
            $table->time('tijd');
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
        Schema::dropIfExists('tbl_vertoning');
    }
}
