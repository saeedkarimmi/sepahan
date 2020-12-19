<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use \App\User;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $permission1 = Permission::create(['name' => 'view_users']);
        $permission2 = Permission::create(['name' => 'create_user']);
        $permission3 = Permission::create(['name' => 'edit_user']);
        $permission4 = Permission::create(['name' => 'delete_user']);
        $role = Role::create(['name' => 'adminastetor']);
        $role->givePermissionTo($permission1);
        $role->givePermissionTo($permission2);
        $role->givePermissionTo($permission3);
        $role->givePermissionTo($permission4);
        $user=User::find(1);
        $user->assignRole('adminastetor');
    
    }
}
