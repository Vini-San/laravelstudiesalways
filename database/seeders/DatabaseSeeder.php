<?php

namespace Database\Seeders;


use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /* \App\Models\User::factory(10)->create(
            [
                'name' => "Vinicius",
                'email' => "viniciusrosa.81@gmail.com",
                'password' =>bcrypt('12345678'),
            ]
        ); */
        /* \App\Models\User::factory(10)->create(); */

        $this->call(UsersSeeder::class);
        /* $this->call(CategoriaSeeder::class);
        $this->call(ProdutosSeeder::class);
        $this->call(LogsSeeder::class); */
        $this->call(LogsSeeder::class);
    }
}
