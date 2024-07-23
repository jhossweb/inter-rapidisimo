<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolaAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = Role::create(["name" => "Admin"]);
        $role2 = Role::create(["name" => "Empleado"]);

        Permission::create(["name" => "dashboard"])->syncRoles([$role1, $role2]);

        Permission::create(["name" => "guias.create"])->syncRoles([$role1, $role2]);
        Permission::create(["name" => "guias.show"])->assignRole($role1);
        
        Permission::create(["name" => "employee"])->assignRole($role1);
        Permission::create(["name" => "employee.show"])->assignRole($role1);
    }
}
