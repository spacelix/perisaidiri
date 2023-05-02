<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $roleSuperAdmin = Role::create(['name' => 'SuperAdmin']);

         $superAdmin = \App\Models\User::factory()->create([
             'name' => 'Super Admin ',
             'email' => 'superadmin@perisaidiri.com',
         ]);
        \App\Models\User::factory()->create([
            'name' => 'User 1',
            'email' => 'user1@perisaidiri.com',
        ]);
         $superAdmin->assignRole($roleSuperAdmin);
    }
}
