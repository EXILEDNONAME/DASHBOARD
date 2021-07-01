<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVmsDirectoriesTable extends Migration {
  public function up() {
    Schema::create('vms_directories', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('id_area')->unsigned();
      $table->integer('id_type')->unsigned();
      $table->string('name');
      $table->string('ip_address')->nullable();
      $table->string('mac_address')->nullable();
      $table->integer('port')->nullable();
      $table->text('description')->nullable();
      $table->integer('active')->default(1);
      $table->integer('status')->default(1);
      $table->integer('created_by')->nullable()->default('0');
      $table->integer('updated_by')->nullable()->default('0');
      $table->foreign('id_area')->references('id')->on('vms_areas')->onDelete('restrict')->onUpdate('restrict');
      $table->foreign('id_type')->references('id')->on('vms_types')->onDelete('restrict')->onUpdate('restrict');
      $table->timestamps();
    });
  }

  public function down() {
    Schema::dropIfExists('vms_directories');
  }
}
