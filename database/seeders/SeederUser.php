<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class SeederUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = User::create(
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('admin'),
                'empresa_id' => 1
            ],
        );

        $usu = [
            [
                'name' => 'Kevin Alejandro Arias Alfaro',
                'email' => 'kevin.arias@econoscope.com',
                'password' => bcrypt('AA20085'),
                'empresa_id' => 1
            ],
            [
                'name' => 'Carlos Josué Argueta Alvarado',
                'email' => 'carlos.argueta@econoscope.com',
                'password' => bcrypt('AA20099'),
                'empresa_id' => 2
            ],
            [
                'name' => 'Fernando José Méndez Menjívar',
                'email' => 'fernando.mendez@econoscope.com',
                'password' => bcrypt('MM21085'),
                'empresa_id' => 3
            ],
            [
                'name' => 'Daniel Esaú Ramirez Flores',
                'email' => 'daniel.ramires@econoscope.com',
                'password' => bcrypt('RR20102'),
                'empresa_id' => 4
            ],
            [
                'name' => 'Christian Adonay Rivera López',
                'email' => 'christian.rivera@econoscope.com',
                'password' => bcrypt('RL18051'),
                'empresa_id' => 5
            ],
        ];

        DB::table('users')->insert($usu);

        // Creo el Rol  administrador 
        $rol = Role::create(['name' => 'Administrador']);

        // Se le dan todos los permisos pertienentes 
        $permisos = Permission::pluck('id', 'id')->all();

        //se sincroniza el permiso al rol
        $rol->syncPermissions($permisos);

        // Se asigna el rol 
        $usuario->assignRole([$rol->id]);
    }
}
