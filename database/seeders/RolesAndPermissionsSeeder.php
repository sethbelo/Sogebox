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
        Permission::firstOrCreate(['name' => 'create invoices']);
        Permission::firstOrCreate(['name' => 'view invoices']);
        Permission::firstOrCreate(['name' => 'manage sales']);
        Permission::firstOrCreate(['name' => 'access reports']);
        Permission::firstOrCreate(['name' => 'manage workshop']);
        Permission::firstOrCreate(['name' => 'view orders']);
        Permission::firstOrCreate(['name' => 'view clients']);
        Permission::firstOrCreate(['name' => 'view employees']);
        Permission::firstOrCreate(['name' => 'view users']);
        Permission::firstOrCreate(['name' => 'delete users']);
        Permission::firstOrCreate(['name' => 'edit users']);
        Permission::firstOrCreate(['name' => 'manage all']);

        // Créer des rôles et assigner des permissions
        $comptableRole = Role::firstOrCreate(['name' => 'comptable']);
        $commercialRole = Role::firstOrCreate(['name' => 'commercial']);
        $superadminRole = Role::firstOrCreate(['name' => 'superadmin']);
        $dgaRole = Role::firstOrCreate(['name' => 'dga']);
        $atelierRole = Role::firstOrCreate(['name' => 'atelier']);
        $rhRole = Role::firstOrCreate(['name' => 'rh']);

        // Assigner des permissions aux rôles
        $comptableRole->givePermissionTo(['create invoices', 'view invoices', 'view orders']);
        $commercialRole->givePermissionTo(['manage sales', 'view orders', 'view clients']);
        $rhRole->givePermissionTo(['view users', 'delete users',  'edit users', 'delete users', 'view employees']);
        $superadminRole->givePermissionTo(Permission::all());  // Le superadmin a toutes les permissions
        $dgaRole->givePermissionTo(['view invoices', 'access reports', 'view orders', 'view clients', 'view employees', 'view users']);
        $atelierRole->givePermissionTo(['manage workshop', 'view orders']);
    }
}
