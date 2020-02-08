<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'sans',
            'email' => 'sans@douyin.com',
            'account' => 'sans',
            'jwt' => \Illuminate\Support\Str::random(30),
            'password' => bcrypt('sans@@..'),
        ]);
    }
}
