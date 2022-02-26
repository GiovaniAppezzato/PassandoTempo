<?php

namespace Database\Seeders;

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
        /**
         * Comando: "php artisan db:seed" ou "php artisan db:seed --class=AlgumSeeder"
         */
        $this->call([
            UserSeeder::class,
            PostagemSeeder::class
        ]);
    }
}
