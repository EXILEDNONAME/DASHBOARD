<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration {
  public function up() {
    Schema::create('cities', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('id_province')->unsigned();
      $table->string("name");
      $table->string("type");
      $table->string("postal_code");
      $table->foreign('id_province')->references('id')->on('provinces')->onDelete('restrict')->onUpdate('restrict');
      $table->timestamps();
    });
  }

  public function down() {
    Schema::dropIfExists('cities');
  }
}
