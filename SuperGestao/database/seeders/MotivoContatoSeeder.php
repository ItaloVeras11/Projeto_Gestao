<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MotivoContato;

class MotivoContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MotivoContato::create(['Dúvida']);
        MotivoContato::create(['Elogio']);
        MotivoContato::create(['Reclamação']);
    }
}
