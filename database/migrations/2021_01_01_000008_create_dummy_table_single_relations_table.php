<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDummyTableSingleRelationsTable extends Migration {
  public function up() {
    Schema::create('dummy_table_single_relations', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('id_general')->unsigned();
      $table->string('name');
      $table->text('description')->nullable();
      $table->integer('active')->default(1);
      $table->integer('status')->default(1);
      $table->integer('created_by')->nullable()->default('0');
      $table->integer('updated_by')->nullable()->default('0');
      $table->foreign('id_general')->references('id')->on('dummy_table_generals')->onDelete('restrict')->onUpdate('restrict');
      $table->timestamps();
    });
  }

  public function down() {
    Schema::dropIfExists('dummy_table_single_relations');
  }
}
