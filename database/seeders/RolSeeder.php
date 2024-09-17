<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Blogger']);

        Permission::create([
            'name' => 'admin.home',
            'description' => 'Ver el dashboard'
        ])->syncRoles([$role1, $role2]);

        Permission::create([
            'name' => 'admin.users.index',
            'description' => 'Ver listado de usuario'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.users.edit',
            'description' => 'Asignar un rol'
        ])->syncRoles([$role1]);


        Permission::create([
            'name' => 'admin.categories.index',
            'description' => 'Ver listado de categorias'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.categories.create',
            'description' => 'Crear categorias'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.categories.edit',
            'description' => 'Editar categorias'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.categories.destroy',
            'description' => 'Eliminar categorias'
        ])->syncRoles([$role1]);


        Permission::create([
            'name' => 'admin.tags.index',
            'description' => 'Ver listado de etiquetas'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.tags.create',
            'description' => 'Crear etiquetas'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.tags.edit',
            'description' => 'Editar etiquetas'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.tags.destroy',
            'description' => 'Eliminar etiquetas'
        ])->syncRoles([$role1]);



        Permission::create([
            'name' => 'admin.posts.index',
            'description' => 'Ver listado de posts'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.posts.create',
            'description' => 'Crear posts'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.posts.edit',
            'description' => 'Editar posts'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.posts.destroy',
            'description' => 'Eliminar posts'
        ])->syncRoles([$role1, $role2]);

        Permission::create([
            'name' => 'admin.saucers.index',
            'description' => 'Ver listado de platillos'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.saucers.create',
            'description' => 'Crear platillos'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.saucers.edit',
            'description' => 'Editar platillos'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.saucers.destroy',
            'description' => 'Eliminar platillos'
        ])->syncRoles([$role1, $role2]);

        Permission::create([
            'name' => 'admin.views.index',
            'description' => 'Ver listado de galeria'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.views.create',
            'description' => 'Crear Imagen'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.views.edit',
            'description' => 'Editar Imagen'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.views.destroy',
            'description' => 'Eliminar Imagen'
        ])->syncRoles([$role1, $role2]);
    }


}
