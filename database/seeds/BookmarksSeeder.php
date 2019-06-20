<?php

use Illuminate\Database\Seeder;

class BookmarksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * This seeder adds a few public bookmarks to the system
     * @return void
     */
    public function run()
    {
        DB::table('bookmarks')->insert([
            'title' => 'Form Validation using Ajax (JavaScript | The Art of Web)',
            'url' => 'http://www.the-art-of-web.com/javascript/ajax-validate/',
            'description' => 'Form Validation using Ajax (JavaScript | The Art of Web)',
            'thumbnail' => null,
            'public' => '1',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('bookmarks')->insert([
            'title' => 'khsing/laravel-world: provide countries, states, and cities relations and database.',
            'url' => 'https://github.com/khsing/laravel-world',
            'description' => 'khsing/laravel-world: provide countries, states, and cities relations and database.',
            'thumbnail' => null,
            'public' => '1',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
    }
}
