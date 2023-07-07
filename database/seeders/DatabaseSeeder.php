<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
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

        $superAdmin = User::factory()->create([
            'name' => 'Super Admin ',
            'email' => 'superadmin@perisaidiri.com',
        ]);
        $superAdmin->assignRole($roleSuperAdmin);
    }
}
