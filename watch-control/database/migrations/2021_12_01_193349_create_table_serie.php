<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSerie extends Migration
{
    public function up()
    {
        Schema::create('serie', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('season');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('serie');
    }
}
