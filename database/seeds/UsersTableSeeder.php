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
        DB::table('users')->insert([
            'name' => 'Uptime Frog',
            'email' => 'dev@uptimefrog.com',
            'password' => bcrypt('admino'),
        ]);
    }
}
