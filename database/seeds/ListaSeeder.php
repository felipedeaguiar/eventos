<?php

use Illuminate\Database\Seeder;

class ListaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lista_bonus')->insert([
            'nome_lista' => 'Feminina',
            'validade' => date('y-m-d'),
            'id_evento' => 1,
        ]);
    }
}
