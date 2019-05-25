<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => str_random(10).'Admin',
            'email' => str_random(10).'admin@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}