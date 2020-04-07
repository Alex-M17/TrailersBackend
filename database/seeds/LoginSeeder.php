<?php

use Illuminate\Database\Seeder;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('logins')->truncate();

        DB::table('logins')->insert([
            'userName' => 'admin',
            'password' => 'admin'
        ]);
    }
}
