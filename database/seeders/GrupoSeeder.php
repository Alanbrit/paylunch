<?php

namespace Database\Seeders;

use App\Models\Grupo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Db::statement('SET FOREIGN_KEY_CHECKS=0;');
        Grupo::truncate();
        Db::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('grupos')->insert([
            'id' => 1,
            'grado' => '1',
            'grupo' => 'A',
            'id_escuela' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('grupos')->insert([
            'id' => 2,
            'grado' => '2',
            'grupo' => 'A',
            'id_escuela' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('grupos')->insert([
            'id' => 3,
            'grado' => '3',
            'grupo' => 'A',
            'id_escuela' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('grupos')->insert([
            'id' => 4,
            'grado' => '4',
            'grupo' => 'A',
            'id_escuela' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('grupos')->insert([
            'id' => 5,
            'grado' => '5',
            'grupo' => 'A',
            'id_escuela' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('grupos')->insert([
            'id' => 6,
            'grado' => '6',
            'grupo' => 'A',
            'id_escuela' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('grupos')->insert([
            'id' => 7,
            'grado' => '1',
            'grupo' => 'A',
            'id_escuela' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('grupos')->insert([
            'id' => 8,
            'grado' => '2',
            'grupo' => 'A',
            'id_escuela' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('grupos')->insert([
            'id' => 9,
            'grado' => '3',
            'grupo' => 'A',
            'id_escuela' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('grupos')->insert([
            'id' => 10,
            'grado' => '4',
            'grupo' => 'A',
            'id_escuela' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('grupos')->insert([
            'id' => 11,
            'grado' => '5',
            'grupo' => 'A',
            'id_escuela' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('grupos')->insert([
            'id' => 12,
            'grado' => '6',
            'grupo' => 'A',
            'id_escuela' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
