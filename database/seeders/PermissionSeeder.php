<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'create-role',
            'view-role',
            'update-role',
            'delete-role',
            'create-permission',
            'view-permission',
            'update-permission',
            'delete-permission',
            'create-users',
            'view-users',
            'update-users',
            'delete-users',
            'create-product',
            'view-product',
            'update-product',
            'delete-product',
            'create-category',
            'view-category',
            'update-category',
            'delete-category',
        ];
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
