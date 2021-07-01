<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJasamargaOfficialsTable extends Migration {
  public function up() {
    Schema::create('jasamarga_officials', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->string('ip_address')->nullable();
      $table->string('mac_address')->nullable();
      $table->integer('port')->nullable();
      $table->text('description')->nullable();
      $table->integer('active')->default(1);
      $table->integer('status')->default(1);
      $table->integer('created_by')->nullable()->default('0');
      $table->integer('updated_by')->nullable()->default('0');
      $table->timestamps();
    });
  }

  public function down() {
    Schema::dropIfExists('jasamarga_officials');
  }
}
