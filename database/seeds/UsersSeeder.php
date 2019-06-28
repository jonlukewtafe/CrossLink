<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'Admin',
            'surname' => 'Istrator',
            'email' => 'admin@localhost.com',
            'email_verified_at' => DB::raw('CURRENT_TIMESTAMP'),
            'password' => bcrypt('administrator1'),
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('users')->insert([
            'first_name' => 'Useradmin',
            'surname' => 'Istrator',
            'email' => 'userAdmin@localhost.com',
            'email_verified_at' => DB::raw('CURRENT_TIMESTAMP'),
            'password' => bcrypt('useradmin1'),
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
    }
}
