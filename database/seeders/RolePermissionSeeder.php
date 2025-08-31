<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $permissions = [
            'manage hero sections',
            'manage products',
            'manage appointments',
            'manage teams',
            'manage testimonials',  
            'manage clients',
            'manage abouts',
        ];

        foreach($permissions as $permission){
            Permission::firstOrCreate(
                [
                    'name' => $permission 
                ]
                );
        }

        $designManagerRole = Role::firstOrCreate([
            'name' => 'designer_manager'
        ]);

        $designManagerPermissions = [
            'manage hero sections',
            'manage teams',
        ];
        $designManagerRole->syncPermissions($designManagerPermissions);


        $superAdminRole = Role::firstOrCreate([
            'name' => 'super_admin'
        ]);

        $user = User::create([
            'name' => 'SyakurComp',
            'email' => 'super@admin.com',
            'password' => bcrypt('121212')

        ]);

        $user->assignRole($superAdminRole);

    }
}
