<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Db::statement('SET FOREIGN_KEY_CHECKS=0;');
        Menu::truncate();
        Db::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('menus')->insert([
            'id' => 1,
            'dia' => 'Lunes',
            'guisado' => '-',
            'sopa_guarnicion' => '-',
            'agua' => '-',
            'postre' => '-',
            'id_escuela' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('menus')->insert([
            'id' => 2,
            'dia' => 'Martes',
            'guisado' => '-',
            'sopa_guarnicion' => '-',
            'agua' => '-',
            'postre' => '-',
            'id_escuela' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('menus')->insert([
            'id' => 3,
            'dia' => 'Miercoles',
            'guisado' => '-',
            'sopa_guarnicion' => '-',
            'agua' => '-',
            'postre' => '-',
            'id_escuela' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('menus')->insert([
            'id' => 4,
            'dia' => 'Jueves',
            'guisado' => '-',
            'sopa_guarnicion' => '-',
            'agua' => '-',
            'postre' => '-',
            'id_escuela' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('menus')->insert([
            'id' => 5,
            'dia' => 'Viernes',
            'guisado' => '-',
            'sopa_guarnicion' => '-',
            'agua' => '-',
            'postre' => '-',
            'id_escuela' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('menus')->insert([
            'id' => 6,
            'dia' => 'Lunes',
            'guisado' => '-',
            'sopa_guarnicion' => '-',
            'agua' => '-',
            'postre' => '-',
            'id_escuela' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('menus')->insert([
            'id' => 7,
            'dia' => 'Martes',
            'guisado' => '-',
            'sopa_guarnicion' => '-',
            'agua' => '-',
            'postre' => '-',
            'id_escuela' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('menus')->insert([
            'id' => 8,
            'dia' => 'Miercoles',
            'guisado' => '-',
            'sopa_guarnicion' => '-',
            'agua' => '-',
            'postre' => '-',
            'id_escuela' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('menus')->insert([
            'id' => 9,
            'dia' => 'Jueves',
            'guisado' => '-',
            'sopa_guarnicion' => '-',
            'agua' => '-',
            'postre' => '-',
            'id_escuela' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('menus')->insert([
            'id' => 10,
            'dia' => 'Viernes',
            'guisado' => '-',
            'sopa_guarnicion' => '-',
            'agua' => '-',
            'postre' => '-',
            'id_escuela' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
