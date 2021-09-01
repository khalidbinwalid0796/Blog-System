<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' => '1',
            'name' => 'MD.Admin',
            'username' => 'admin',
            'email' => 'admin@blog.com',
            'password' => Hash::make('rootadmin'), //bcrypt
        ]);

        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'MD.Author',
            'username' => 'author',
            'email' => 'author@blog.com',
            'password' => Hash::make('rootauthor'), //bcrypt
        ]);
    }
}
