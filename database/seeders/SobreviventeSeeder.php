<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SobreviventeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sobreviventes')->insert([
            'nome' => 'deivson',
            'idade' => '32',
            'sexo' => 'masculino',
            'number' => '235',
            'lat' => '4',
            'lng' => '105',
        ]);
    
        }
}
