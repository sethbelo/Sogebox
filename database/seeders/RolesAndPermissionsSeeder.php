<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run(): void
    {
        // Créer des permissions spécifiques à chaque type d'utilisateur
        Permission::create(['name' => 'create invoices']);
        Permission::create(['name' => 'view invoices']);
        Permission::create(['name' => 'manage sales']);
        Permission::create(['name' => 'access reports']);
        Permission::create(['name' => 'manage workshop']);
        Permission::create(['name' => 'view users']);
        Permission::create(['name' => 'delete users']);
        Permission::create(['name' => 'edit users']);
        Permission::create(['name' => 'manage all']);

        // Créer des rôles et assigner des permissions
        $comptableRole = Role::create(['name' => 'comptable']);
        $commercialRole = Role::create(['name' => 'commercial']);
        $superadminRole = Role::create(['name' => 'superadmin']);
        $dgaRole = Role::create(['name' => 'dga']);
        $atelierRole = Role::create(['name' => 'atelier']);
        $rhRole = Role::create(['name' => 'rh']);

        // Assigner des permissions aux rôles
        $comptableRole->givePermissionTo(['create invoices', 'view invoices']);
        $commercialRole->givePermissionTo(['manage sales']);
        $rhRole->givePermissionTo(['view users', 'delete users',  'edit users', 'delete users']);
        $superadminRole->givePermissionTo(Permission::all());  // Le superadmin a toutes les permissions
        $dgaRole->givePermissionTo(['view invoices', 'access reports']);
        $atelierRole->givePermissionTo(['manage workshop']);
    }
}
