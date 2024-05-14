<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use PhpParser\Node\Expr\FuncCall;

class MascotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */



    public function run(): void
    {

        DB::table('mascotas')->insert([
            'name' => 'Clara',
            'cliente_id' => 3,
            'especie_id' => 1,
            'raza' => 'beagle',
            'color_pelo' => 'Café,Blanco y manchas negras',
            'fecha_nacimiento' => date('Y-m-d', strtotime("-100 months")),
            'peso_promedio'=>'14',
            'peso_actual'=>'15',
            'historial_medico_id'=>1,
            'calendario_vacunacion_id'=>1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('mascotas')->insert([
            'name' => 'Lucas',
            'cliente_id' => 1,
            'especie_id' => 1,
            'raza' => 'French poodle',
            'color_pelo' => 'Blanco',
            'fecha_nacimiento' => date('Y-m-d',  strtotime("-60 months")),
            'peso_promedio'=>'10',
            'peso_actual'=>'9',
            'historial_medico_id'=>2,
            'calendario_vacunacion_id'=>2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('mascotas')->insert([
            'name' => 'Mondongo',
            'cliente_id' => 3,
            'especie_id' => 2,
            'raza' => 'Siames',
            'color_pelo' => 'Café claro',
            'fecha_nacimiento' => date('Y-m-d',  strtotime("-80 months")),
            'peso_promedio'=>'8',
            'peso_actual'=>'9',
            'historial_medico_id'=>3,
            'calendario_vacunacion_id'=>3,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('mascotas')->insert([
            'name' => 'Dinero',
            'cliente_id' => 5,
            'especie_id' => 1,
            'raza' => 'Pitbull',
            'color_pelo' => 'Blanco',
            'fecha_nacimiento' => date('Y-m-d',  strtotime("-120 months")),
            'peso_promedio'=>'10',
            'peso_actual'=>'14',
            'historial_medico_id'=>4,
            'calendario_vacunacion_id'=>4,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('mascotas')->insert([
            'name' => 'Apolo',
            'cliente_id' => 2,
            'especie_id' => 1,
            'raza' => 'Bulldog Francés',
            'color_pelo' => 'Gris claro',
            'fecha_nacimiento' => date('Y-m-d',  strtotime("-140 months")),
            'peso_promedio'=>'6',
            'peso_actual'=>'5',
            'historial_medico_id'=>5,
            'calendario_vacunacion_id'=>5,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
