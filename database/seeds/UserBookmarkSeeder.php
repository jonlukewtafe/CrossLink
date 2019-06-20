<?php

use Illuminate\Database\Seeder;

class UserBookmarkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    /**
     *  DB::table('user_bookmark')->insert([
     * 'user_id' => 'DATAHERE',
     * 'bookmark_id' => 'DATAHERE',
     * ]);
     */

    public function run()
    {

        DB::table('user_bookmark')->insert([
            'user_id' => '1',
            'bookmark_id' => '1',
        ]);

    }
}
