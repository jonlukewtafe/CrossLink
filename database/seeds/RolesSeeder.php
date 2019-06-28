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
        //1
        DB::table('permissions')->insert([
            'name' => 'browse',
            'guard_name' => 'web',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        //2
        DB::table('permissions')->insert([
            'name' => 'read',
            'guard_name' => 'web',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        //3
        DB::table('permissions')->insert([
            'name' => 'edit',
            'guard_name' => 'web',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        //4
        DB::table('permissions')->insert([
            'name' => 'add',
            'guard_name' => 'web',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        //5
        DB::table('permissions')->insert([
            'name' => 'delete',
            'guard_name' => 'web',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        //6
        DB::table('permissions')->insert([
            'name' => 'search',
            'guard_name' => 'web',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        //7
        DB::table('permissions')->insert([
            'name' => 'edit_profile',
            'guard_name' => 'web',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        //8
        DB::table('permissions')->insert([
            'name' => 'authenticated',
            'guard_name' => 'web',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        //9
        DB::table('permissions')->insert([
            'name' => 'unauthenticated',
            'guard_name' => 'web',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        //10
        DB::table('permissions')->insert([
            'name' => 'suspended',
            'guard_name' => 'web',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);


        //Role Has Permissions - Administrator
        DB::table('role_has_permissions')->insert([
            'permission_id' => '1',
            'role_id' => '1',
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '2',
            'role_id' => '1',
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '3',
            'role_id' => '1',
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '4',
            'role_id' => '1',
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '5',
            'role_id' => '1',
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '6',
            'role_id' => '1',
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '7',
            'role_id' => '1',
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '8',
            'role_id' => '1',
        ]);

        //Role Has Permissions - User Administrator
        DB::table('role_has_permissions')->insert([
            'permission_id' => '7',
            'role_id' => '2',
        ]);

        //Role Has Permissions - User
        DB::table('role_has_permissions')->insert([
            'permission_id' => '1',
            'role_id' => '3',
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '2',
            'role_id' => '3',
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '3',
            'role_id' => '3',
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '4',
            'role_id' => '3',
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '5',
            'role_id' => '3',
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '6',
            'role_id' => '3',
        ]);

        // Model Has Roles
        DB::table('model_has_roles')->insert([
            'role_id' => 1,
            'model_type' => 'App\User',
            'model_id' => 1,
        ]);
        DB::table('model_has_roles')->insert([
            'role_id' => 2,
            'model_type' => 'App\User',
            'model_id' => 2,
        ]);

    }
}
