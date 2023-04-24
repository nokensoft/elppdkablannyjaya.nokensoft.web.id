<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;
use Illuminate\Support\Str;
class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()['cache']->forget('spatie.permission.cache');

        // CREATE ROLES

        $adminRole = Role::create(
            [
            'id'                => 1,
            'guard_name'        => 'web',
            'name'              => 'administrator',
            'display_name'      => 'Administrator',
        ]);
        
        $opdRole = Role::create(
            [
            'id'                => 2,
            'guard_name'        => 'web',
            'name'              => 'opd',
            'display_name'      => 'Perangkat Daerah',
        ]);
        
        $supervisorRole = Role::create(
            [
            'id'                => 3,
            'guard_name'        => 'web',
            'name'              => 'supervisor',
            'display_name'      => 'Supervisor',
        ]);

        // CREATE USERS AND ASIGN ROLES

        // Create User Admin
        $admin = User::create([
            'name'              => 'Admin',
            'slug'              => 'admin',
            'email'             => 'admin@lannyjayakab.go.id',
            'password'          => bcrypt('admin@lannyjayakab.go.id'),
            'avatar'            => 'assets/images/avatars/user.png',
        ]);

        // Asign Role
        $admin->assignRole($adminRole);

        // Create User Pendidikan
        $pendidikan = User::create([
            'name'              => 'Dinas Pendidikan',
            'slug'              => 'dinas-pendidikan',
            'email'             => 'dinaspendidikan@lannyjayakab.go.id',
            'password'          => bcrypt('dinaspendidikan@lannyjayakab.go.id'),
            'avatar'            => 'assets/images/avatars/user2.png',
        ]);

        // Asign Role
        $pendidikan->assignRole($opdRole);

        // Dinas Kesehatan
        $kesehatan = User::create([
            'name'              => 'Dinas Kesehatan',
            'slug'              => 'dinas-kesehatan',
            'email'             => 'dinaskesehatan@lannyjayakab.go.id',
            'password'          => bcrypt('dinaskesehatan@lannyjayakab.go.id'),
            'avatar'            => 'assets/images/avatars/user3.png',
        ]);

        // Asign Role
        $kesehatan->assignRole($opdRole);

        // Create User Pekerjaan umum
        $kesehatan = User::create([
            'name'              => 'Dinas Pekerjaan Umum',
            'slug'              => 'dinas-pekerjaan-umum',
            'email'             => 'dinaspu@lannyjayakab.go.id',
            'password'          => bcrypt('dinaspu@lannyjayakab.go.id'),
            'avatar'            => 'assets/images/avatars/user3.png',
        ]);

        // Asign Role
        $kesehatan->assignRole($opdRole);

        // Create User Pekerjaan umum
        $supervisor = User::create([
            'name'              => 'Supervisor',
            'slug'              => 'supervisor',
            'email'             => 'supervisor@lannyjayakab.go.id',
            'password'          => bcrypt('supervisor@lannyjayakab.go.id'),
            'avatar'            => 'assets/images/avatars/user3.png',
        ]);

        // Asign Role
        $supervisor->assignRole($supervisorRole);

    }
}
