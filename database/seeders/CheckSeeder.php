<?php

namespace Database\Seeders;

use App\Models\Check;
use App\Models\Clients;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CheckSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Check::factory(6)->times(23)->create();
    }
}
