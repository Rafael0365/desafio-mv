<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ParticipanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 10; $i++){
            DB::table('participantes')->insert([
                'nome' => Str::random(10),
                'cpf' => Str::random(10),
                'prato' => Str::random(10),
            ]);
        }
    }
}
