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

        // ASIGN ROLES

        $adminRole = Role::create(
            [
            'guard_name'        => 'web',
            'name'              => 'administrator',
            'display_name'      => 'Administrator',
        ]);
        $bpendidikanRole = Role::create(
            [
            'guard_name'        => 'web',
            'name'              => 'bidang_pendidikan',
            'display_name'      => 'Bidang Pendidikan',
        ]);
        $bkesehatanRole = Role::create(
            [
            'guard_name'        => 'web',
            'name'              => 'bidang_kesehatan',
            'display_name'      => 'Bidang Kesehatan',
        ]);
        $bpekerjaanUmumRole = Role::create(
            [
            'guard_name'        => 'web',
            'name'              => 'bidang_pu',
            'display_name'      => 'Bidang Pekerjaan Umum',
        ]);


        // ADMIN
        $admin = User::create([
            'name'              => 'Admin',
            'slug'              => 'admin',
            'email'             => 'admin@lannyjayakab.go.id',
            'password'          => bcrypt('admin@lannyjayakab.go.id'),
            'avatar'            => 'assets/images/avatars/user.png',
        ]);
        $admin->assignRole($adminRole);

        // Dinas Pendidikan
        $pendidikan = User::create([
            'name'              => 'Dinas Pendidikan',
            'slug'              => 'dinas-pendidikan',
            'email'             => 'dinaspendidikan@lannyjayakab.go.id',
            'password'          => bcrypt('dinaspendidikan@lannyjayakab.go.id'),
            'avatar'            => 'assets/images/avatars/user2.png',
        ]);
        $pendidikan->assignRole($bpendidikanRole);

        // Dinas Kesehatan
        $kesehatan = User::create([
            'name'              => 'Dinas Kesehatan',
            'slug'              => 'dinas-kesehatan',
            'email'             => 'dinaskesehatan@lannyjayakab.go.id',
            'password'          => bcrypt('dinaskesehatan@lannyjayakab.go.id'),
            'avatar'            => 'assets/images/avatars/user3.png',
        ]);
        $kesehatan->assignRole($bkesehatanRole);

        // Dinas Pekerjaan umum
        $kesehatan = User::create([
            'name'              => 'Dinas PU',
            'slug'              => 'dinas-pu',
            'email'             => 'dinaspu@lannyjayakab.go.id',
            'password'          => bcrypt('dinaspu@lannyjayakab.go.id'),
            'avatar'            => 'assets/images/avatars/user3.png',
        ]);
        $kesehatan->assignRole($bkesehatanRole);

    }
}
