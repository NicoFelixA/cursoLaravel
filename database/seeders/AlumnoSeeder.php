<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Alumno;
use Illuminate\Database\Seeder;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Alumno::factory(10)->create();
        Alumno::create([
            'nombre' => 'RUBEN',
            'edad' => 5,
            'nc' => '12341231',
            'sexo' => '1'
        ]);

        Alumno::create([
            'nombre' => 'ANGEL',
            'edad' => 79,
            'nc' => '345345',
            'sexo' => '0'
        ]);

        Alumno::create([
            'nombre' => 'NICO',
            'edad' => 17,
            'nc' => '3568U23',
            'sexo' => '1'
        ]);
    }
}
