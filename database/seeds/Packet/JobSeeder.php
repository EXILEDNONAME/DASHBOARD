<?php

use App\Models\Backend\Main\Job;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder {
    public function run() {
        Job::create([
            "name" => "Wirausaha"
        ]);

        Job::create([
            "name" => "Wiraswasta"
        ]);

        Job::create([
            "name" => "Freelance"
        ]);

        Job::create([
            "name" => "Pelajar"
        ]);
    }
}
