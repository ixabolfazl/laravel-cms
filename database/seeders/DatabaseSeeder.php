<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\BaseSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
         $this->call(BaseSeeder::class);
    }
}
