<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Db::statement('SET FOREIGN_KEY_CHECKS=0;');
        User::truncate();
        Db::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Alan',
            'apellidos' => 'Perez',
            'email' => 'admin',
            'password' => bcrypt('12345678'),
            'rol' => 'admin',
            'id_escuela' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'id' => 2,
            'name' => 'Raul',
            'apellidos' => 'Perez',
            'numero' => '',
            'numero_2' => '',
            'saldo' => '0',
            'email' => 'tutor',
            'password' => bcrypt('12345678'),
            'id_escuela' => 1,
            'id_grupo' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'id' => 3,
            'name' => 'Juan',
            'apellidos' => 'Perez',
            'numero' => '',
            'numero_2' => '',
            'saldo' => '0',
            'email' => 'tutor2',
            'password' => bcrypt('12345678'),
            'id_escuela' => 1,
            'id_grupo' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'id' => 4,
            'name' => 'Maria',
            'apellidos' => 'Perez',
            'numero' => '',
            'numero_2' => '',
            'saldo' => '0',
            'email' => 'tutor3',
            'password' => bcrypt('12345678'),
            'id_escuela' => 1,
            'id_grupo' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'id' => 5,
            'name' => 'Israel',
            'apellidos' => 'Perez',
            'numero' => '',
            'numero_2' => '',
            'saldo' => '0',
            'email' => 'tutor4',
            'password' => bcrypt('12345678'),
            'id_escuela' => 1,
            'id_grupo' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'id' => 6,
            'name' => 'Claudia',
            'apellidos' => 'Perez',
            'numero' => '',
            'numero_2' => '',
            'saldo' => '0',
            'email' => 'tutor5',
            'password' => bcrypt('12345678'),
            'id_escuela' => 1,
            'id_grupo' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'id' => 7,
            'name' => 'Leticia',
            'apellidos' => 'Perez',
            'numero' => '',
            'numero_2' => '',
            'saldo' => '0',
            'email' => 'tutor6',
            'password' => bcrypt('12345678'),
            'id_escuela' => 1,
            'id_grupo' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'id' => 8,
            'name' => 'Violeta',
            'apellidos' => 'Perez',
            'numero' => '',
            'numero_2' => '',
            'saldo' => '0',
            'email' => 'tutor7',
            'password' => bcrypt('12345678'),
            'id_escuela' => 1,
            'id_grupo' => 4,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'id' => 9,
            'name' => 'Noemi',
            'apellidos' => 'Perez',
            'numero' => '',
            'numero_2' => '',
            'saldo' => '0',
            'email' => 'tutor8',
            'password' => bcrypt('12345678'),
            'id_escuela' => 1,
            'id_grupo' => 4,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'id' => 10,
            'name' => 'Ashley',
            'apellidos' => 'Perez',
            'numero' => '',
            'numero_2' => '',
            'saldo' => '0',
            'email' => 'tutor9',
            'password' => bcrypt('12345678'),
            'id_escuela' => 1,
            'id_grupo' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'id' => 11,
            'name' => 'Vanessa',
            'apellidos' => 'Perez',
            'numero' => '',
            'numero_2' => '',
            'saldo' => '0',
            'email' => 'tutor10',
            'password' => bcrypt('12345678'),
            'id_escuela' => 1,
            'id_grupo' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'id' => 12,
            'name' => 'Alan',
            'apellidos' => 'Perez',
            'email' => 'admin2',
            'password' => bcrypt('12345678'),
            'rol' => 'admin',
            'id_escuela' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'id' => 13,
            'name' => 'Raul',
            'apellidos' => 'Perez',
            'numero' => '',
            'numero_2' => '',
            'saldo' => '0',
            'email' => 'tutor11',
            'password' => bcrypt('12345678'),
            'id_escuela' => 2,
            'id_grupo' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'id' => 14,
            'name' => 'Juan',
            'apellidos' => 'Perez',
            'numero' => '',
            'numero_2' => '',
            'saldo' => '0',
            'email' => 'tutor12',
            'password' => bcrypt('12345678'),
            'id_escuela' => 2,
            'id_grupo' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'id' => 15,
            'name' => 'Maria',
            'apellidos' => 'Perez',
            'numero' => '',
            'numero_2' => '',
            'saldo' => '0',
            'email' => 'tutor13',
            'password' => bcrypt('12345678'),
            'id_escuela' => 2,
            'id_grupo' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'id' => 16,
            'name' => 'Israel',
            'apellidos' => 'Perez',
            'numero' => '',
            'numero_2' => '',
            'saldo' => '0',
            'email' => 'tutor14',
            'password' => bcrypt('12345678'),
            'id_escuela' => 2,
            'id_grupo' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'id' => 17,
            'name' => 'Claudia',
            'apellidos' => 'Perez',
            'numero' => '',
            'numero_2' => '',
            'saldo' => '0',
            'email' => 'tutor15',
            'password' => bcrypt('12345678'),
            'id_escuela' => 2,
            'id_grupo' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'id' => 18,
            'name' => 'Leticia',
            'apellidos' => 'Perez',
            'numero' => '',
            'numero_2' => '',
            'saldo' => '0',
            'email' => 'tutor16',
            'password' => bcrypt('12345678'),
            'id_escuela' => 2,
            'id_grupo' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'id' => 19,
            'name' => 'Violeta',
            'apellidos' => 'Perez',
            'numero' => '',
            'numero_2' => '',
            'saldo' => '0',
            'email' => 'tutor17',
            'password' => bcrypt('12345678'),
            'id_escuela' => 2,
            'id_grupo' => 4,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'id' => 20,
            'name' => 'Noemi',
            'apellidos' => 'Perez',
            'numero' => '',
            'numero_2' => '',
            'saldo' => '0',
            'email' => 'tutor18',
            'password' => bcrypt('12345678'),
            'id_escuela' => 2,
            'id_grupo' => 4,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'id' => 21,
            'name' => 'Ashley',
            'apellidos' => 'Perez',
            'numero' => '',
            'numero_2' => '',
            'saldo' => '0',
            'email' => 'tutor19',
            'password' => bcrypt('12345678'),
            'id_escuela' => 2,
            'id_grupo' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'id' => 22,
            'name' => 'Vanessa',
            'apellidos' => 'Perez',
            'numero' => '',
            'numero_2' => '',
            'saldo' => '0',
            'email' => 'tutor20',
            'password' => bcrypt('12345678'),
            'id_escuela' => 2,
            'id_grupo' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
