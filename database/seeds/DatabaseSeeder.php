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
        // $this->call(UsersTableSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(ProfilesSeeder::class);
        $this->call(SocialMediaLinksSeeder::class);
        $this->call(TagsSeeder::class);
        $this->call(BookmarksSeeder::class);
        $this->call(UserBookmarkSeeder::class);
        $this->call(TagBookmarkSeeder::class);
    }
}
