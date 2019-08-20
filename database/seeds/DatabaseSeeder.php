<?php

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
        // $this->call(UsersTableSeeder::class);

        factory(\App\Company::class, 10)->create();
        factory(\App\Branch::class, 30)->create();
        factory(\App\Timing::class,50)->create();
        factory(\App\Contact::class, 15)->create();
    }
}
