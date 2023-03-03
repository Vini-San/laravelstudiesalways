<?php

namespace Database\Seeders;

use App\Models\Logs;
use Illuminate\Database\Seeder;

class LogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ///* User::factory(10)->create(); */
        Logs::factory(10)->create();

    }
}
