<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{

    /**
     * List of applications to add.
     */
    private $permissions = [
        'role-list',
        'role-create',
        'role-edit',
        'role-delete',
        'user-list',
        'user-create',
        'user-edit',
        'user-delete',
        'product-list',
        'product-create',
        'product-edit',
        'product-delete',
        'stock-create',
        'stock-edit',
        'stock-delete'
    ];


    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        foreach ($this->permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Create admin User and assign the role to him.
        $userAdmin = User::create([
            'name' => 'Admin Ekart',
            'email' => 'admin@example.com',
            'password' => Hash::make('password-admin')
        ]);

        $userVendor = User::create([
            'name' => 'Vendor Ekart',
            'email' => 'vendor@example.com',
            'password' => Hash::make('password-vendor')
        ]);

        $userCustomer = User::create([
            'name' => 'Customer Ekart',
            'email' => 'customer@example.com',
            'password' => Hash::make('password-customer')
        ]);

    
        $roleAdmin = Role::create(['name' => 'Admin']);
        $roleVendor = Role::create(['name' => 'Vendor']);
        $roleCustomer = Role::create(['name'=>'Customer']);

        $permissionsAll = Permission::pluck('id', 'id')->all();

        $roleAdmin->syncPermissions($permissionsAll);
        $roleVendor->givePermissionTo([
            'product-list',
            'product-create',
            'product-edit',
            'product-delete',
            'stock-create',
            'stock-edit',
            'stock-delete'
         ]);
         $roleCustomer->givePermissionTo('product-list');

        $userAdmin->assignRole([$roleAdmin->id]);
        $userVendor->assignRole([$roleVendor->id]);
        $userCustomer->assignRole([$roleCustomer->id]);

        $this->call(ProductTableSeeder::class);
    }
}
