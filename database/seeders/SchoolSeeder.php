<?php

namespace Database\Seeders;

use App\Models\School;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Db::statement('SET FOREIGN_KEY_CHECKS=0;');
        School::truncate();
        Db::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('schools')->insert([
            'id' => 1,
            'nombre' => 'Benito Juárez',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('schools')->insert([
            'id' => 2,
            'nombre' => 'Veinte de Noviembre',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
