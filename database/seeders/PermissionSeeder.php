<?php

namespace Database\Seeders;

use App\Models\admin\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            [
             'id'    => 1,
             'name'  => 'view_items',
            ],
            [
             'id'    => 2,
             'name'  => 'manage_items',
            ],
            [
             'id'    => 3,
             'name'  => 'manage_users',
            ]
         ];
         
         Permission::insert($permissions);
    }
}
