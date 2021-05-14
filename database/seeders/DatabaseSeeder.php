<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**php artisan voyager:admin your@email.com --create
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->seed(UsersTableSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
