<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    /**
     *  DB::table('roles')->insert([
     * 'name' => 'DATAHERE',
     * 'description' => 'DATAHERE',
     * 'guard_name' => 'DATAHERE',
     * 'created_at' => DB::raw('CURRENT_TIMESTAMP'),
     * 'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
     * ]);
     */


    public function run()
    {
        //Roles
        DB::table('roles')->insert([
            'name' => 'administrator',
            'description' => 'An administrator is able to modify all components of the entire system',
            'guard_name' => 'web',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('roles')->insert([
            'name' => 'user_administrator',
            'description' => 'A user administrator is able to modify all components of the user system',
            'guard_name' => 'web',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('roles')->insert([
            'name' => 'user',
            'description' => 'A user is able to modify their own bookmarks and other similar elements.',
            'guard_name' => 'web',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('roles')->insert([
            'name' => 'guest',
            'description' => 'A guest user is any unauthorised user of the system.',
            'guard_name' => 'web',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        // Permissions
        DB::table('permissions')->insert([
            'name' => 'browse',
            'guard_name' => 'web',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('permissions')->insert([
            'name' => 'read',
            'guard_name' => 'web',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('permissions')->insert([
            'name' => 'edit',
            'guard_name' => 'web',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('permissions')->insert([
            'name' => 'add',
            'guard_name' => 'web',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('permissions')->insert([
            'name' => 'delete',
            'guard_name' => 'web',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('permissions')->insert([
            'name' => 'search',
            'guard_name' => 'web',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('permissions')->insert([
            'name' => 'authenticated',
            'guard_name' => 'web',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('permissions')->insert([
            'name' => 'unauthenticated',
            'guard_name' => 'web',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('permissions')->insert([
            'name' => 'suspended',
            'guard_name' => 'web',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
    }
}
