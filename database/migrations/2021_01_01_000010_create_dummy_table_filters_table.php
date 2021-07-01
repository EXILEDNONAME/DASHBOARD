<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDummyTableFiltersTable extends Migration {
  public function up() {
    Schema::create('dummy_table_filters', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('id_multi_relation')->unsigned();
      $table->string('name');
      
      $table->text('description')->nullable();
      $table->integer('active')->default(1);
      $table->integer('status')->default(1);
      $table->integer('created_by')->nullable()->default('0');
      $table->integer('updated_by')->nullable()->default('0');
      $table->foreign('id_multi_relation')->references('id')->on('dummy_table_multi_relations')->onDelete('restrict')->onUpdate('restrict');
      $table->timestamps();
    });
  }

  public function down() {
    Schema::dropIfExists('dummy_table_filters');
  }
}
