<?php

use Illuminate\Database\Seeder;

class CasaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('casa')->insert([
            'nome' => 'Vintage',
            'capacidade' => '100',
            'cidade' => 'floripa',
        ]);
    }
}
