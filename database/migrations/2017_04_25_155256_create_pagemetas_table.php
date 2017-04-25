<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagemetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagemetas', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name', 60);
            $table->string('slug', 60);
            $table->string('metaname');
            $table->string('keywords');

            // llave foreanea a la tabla contents
            $table->integer('content_id')->unsigned();
            $table->foreign('content_id')->references('id')->on('contents');


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
        Schema::dropIfExists('pagemetas');
    }
}
