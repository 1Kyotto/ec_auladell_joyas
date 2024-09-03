<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UsuariosSeeder extends Seeder
{
    public function run(): void
    {   
        // Insertar un contacto en la tabla 'contactos'
        $contactoId = DB::table('contactos')->insertGetId([
            'nombre' => 'Admin',
            'email' => 'admin@gmail.com',
            'telefono' => '123456789',
        ]);

        // Insertar el usuario correspondiente en la tabla 'usuarios'
        DB::table('usuarios')->insert([
            'id_contacto' => $contactoId,
            'password' => Hash::make('admin123'), // Hasheamos la contraseña
            'rol' => 'A', // Administrador
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Insertar un segundo contacto para un usuario cliente
        $contactoIdCliente = DB::table('contactos')->insertGetId([
            'nombre' => 'Cliente 1',
            'email' => 'cliente1@gmail.com',
            'telefono' => '987654321',
        ]);

        // Insertar el usuario correspondiente en la tabla 'usuarios'
        DB::table('usuarios')->insert([
            'id_contacto' => $contactoIdCliente,
            'password' => Hash::make('cliente123'), // Hasheamos la contraseña
            'rol' => 'C', // Cliente
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Insertar un segundo contacto para un usuario cliente
        $contactoIdCliente = DB::table('contactos')->insertGetId([
            'nombre' => 'Cliente 2',
            'email' => 'cliente2@gmail.com',
            'telefono' => '951753258',
        ]);

        // Insertar el usuario correspondiente en la tabla 'usuarios'
        DB::table('usuarios')->insert([
            'id_contacto' => $contactoIdCliente,
            'password' => Hash::make('cliente321'), // Hasheamos la contraseña
            'rol' => 'C', // Cliente
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
