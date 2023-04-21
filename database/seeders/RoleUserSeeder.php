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

        $editorRole = Role::create(
            [
            'guard_name'        => 'web',
            'name'              => 'editor',
            'display_name'      => 'Editor',
        ]);

        $authorRole = Role::create(
            [
            'guard_name'        => 'web',
            'name'              => 'author',
            'display_name'      => 'Author',
        ]);


        // ADMIN
        $admin = User::create([
            'name'              => 'Admin',
            'email'             => 'admin@lannyjayakab.go.id',
            'password'          => bcrypt('admin@lannyjayakab.go.id'),
            'avatar'            => 'assets/images/avatars/1.jpg',
        ]);
        $admin->assignRole($adminRole);

        // EDITOR
        $editor = User::create([
            'name'              => 'Editor',
            'email'             => 'editor@lannyjayakab.go.id',
            'password'          => bcrypt('editor@lannyjayakab.go.id'),
            'avatar'            => 'assets/images/avatars/2.jpg',
        ]);
        $editor->assignRole($editorRole);

        // AUTHOR
        $author = User::create([
            'name'              => 'Author',
            'email'             => 'author@lannyjayakab.go.id',
            'password'          => bcrypt('author@lannyjayakab.go.id'),
            'avatar'            => 'assets/images/avatars/3.jpg',
        ]);
        $author->assignRole($authorRole);

    }
}
