<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJasamargaIntercomesTable extends Migration {
  public function up() {
    Schema::create('jasamarga_intercomes', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->integer('no_intercome')->nullable();
      $table->string('location')->nullable();
      $table->string('section')->nullable();
      $table->text('description')->nullable();
      $table->integer('active')->default(1);
      $table->integer('status')->default(1);
      $table->integer('created_by')->nullable()->default('0');
      $table->integer('updated_by')->nullable()->default('0');
      $table->timestamps();
    });
  }

  public function down() {
    Schema::dropIfExists('jasamarga_intercomes');
  }
}
