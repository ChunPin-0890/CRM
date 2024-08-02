<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds. 
     */
    public function run(): void
    {
        $role_admin = Role::create(['name' => "admin"]);
        $role_eyezen = Role::create(['name' => "eyezen"]);
        $role_varilux = Role::create(['name' => "varilux"]);
        $role_stellest = Role::create(['name' => "stellest"]);
        $categories_4 = Role::create(['name' => "categories_4"]);
   
        $permission_read = Permission::create(['name' => 'read articles']);      
        $permission_edit = Permission::create(['name' => 'edit articles']);      
        $permission_write = Permission::create(['name' => 'write articles']);      
        $permission_delete = Permission::create(['name' => 'delete articles']);   
        
        $permissions_admin = [$permission_read, $permission_edit, $permission_write, $permission_delete];

        $role_admin->syncPermissions($permissions_admin);
        $role_eyezen->givePermissionTo($permission_read);
    }
}
