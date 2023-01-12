<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;

class DocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->Insert([
        //     'titulo'=> 'Fundamentos de Laravel',


        // ]);
        DB::table('documentos')->Insert([
            'titulo'=> 'Fundamentos de Java',
            'autor'=> 'David Gauto',
            'descripcion'=>'Libro sobre Introduccion a Javal',
            'ubicacion'=> '/pdf/El_lenguaje_C.pdf',
            'portada'=>'/imagenes/libro.png',
            'created_at'=> now(),
            'updated_at'=> now()
        ]);
        DB::table('documentos')->Insert([
            'titulo'=> 'Introducción a PHP',
            'autor'=> 'Luis Galeano',
            'descripcion'=>'Libro sobre Introduccion a PHP ',
            'ubicacion'=> '/pdf/El_lenguaje_C.pdf',
            'portada'=>'/imagenes/libro.png',
            'created_at'=> now(),
            'updated_at'=> now()

        ]);
        DB::table('documentos')->Insert([
            'titulo'=> 'Repositorio Digital Institucional',
            'autor'=> 'Silvana Fleitas Tejera',
            'descripcion'=>'Trabajo Final de Carrera',
            'ubicacion'=> '/pdf/El_lenguaje_C.pdf',
            'portada'=>'/imagenes/libro.png',
            'created_at'=> now(),
            'updated_at'=> now()

        ]);
    }
}
