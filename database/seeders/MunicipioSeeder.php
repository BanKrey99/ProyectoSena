<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MunicipioSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('municipios')->insert([
            [
                'nombre' => 'Malaga',
                'codigoPostal' => '682011',
            ],
            [
                'nombre' => 'Capitanejo',
                'codigoPostal' => '681548',
            ],
            [
                'nombre' => 'Concepcion',
                'codigoPostal' => '681511',
            ],
            [
                'nombre' => 'Cerrito',
                'codigoPostal' => '681501',
            ],
            [
                'nombre' => 'Miranda',
                'codigoPostal' => '682005',
            ],
        ]);
    }
}
