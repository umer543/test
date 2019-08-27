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

//        DB::table('users')->insert([
//
//            'name' => $name,
//            'email' => $email,
//            'password' => bcrypt('password'),
//        ]);

        DB::table('roles')->insert([

            'name' => 'admin',
            'guard_name' => 'web',
        ]);

        DB::table('roles')->insert([

            'name' => 'general user',
            'guard_name' => 'web',
        ]);

    }
}
