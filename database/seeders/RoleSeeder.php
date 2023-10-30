<?php

namespace Database\Seeders;

use App\Models\admin\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
           [
            'id'    => 1,
            'name'  => 'Super Admin',
           ],
           [
            'id'    => 2,
            'name'  => 'Admin',
           ],
           [
            'id'    => 3,
            'name'  => 'User',
           ]
        ];
        
        Role::insert($roles);
    }
}
