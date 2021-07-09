<?php

use Illuminate\Database\Seeder;

class DefaultSeeder extends Seeder {
  public function run() {

    // Default
    $this->call(Accesses::class);
    $this->call(Users::class);

    // Packet
    $this->call(ProvinceSeeder::class);
    $this->call(CitySeeder::class);

    $this->call(JobSeeder::class);
  }
}
