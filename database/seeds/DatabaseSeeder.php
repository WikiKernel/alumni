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
        DB::table('posts')->insert([
            'is_resolved' => 'false',
            'deleted' => 'false',
            'title' => Str::random(255),
            'body' => Str::random(600),
            'has_answer' => 'false',
            'has_project' => 'false',
        ]);
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' =>
            Str::random(10) . '@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'), // password
            'remember_token' => 'password',
        ]);
    }
}
