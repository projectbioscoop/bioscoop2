<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_films', function (Blueprint $table) {
            $table->increments('id');
            $table->string('film_title');
            $table->string('taal_versie');
            $table->string('genre');
            $table->string('projectie');
            $table->string('film_info');
            $table->string('voorwaarden');

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
        Schema::dropIfExists('tbl_films');
    }
}
