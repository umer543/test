<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $name="admin";
        $email="admin@gmail.com";
        DB::table('users')->insert([

            'name' => $name,
            'role_id'=>'1',
            'email' => $email,
            'password' => bcrypt('password'),
        ]);

    }
}
