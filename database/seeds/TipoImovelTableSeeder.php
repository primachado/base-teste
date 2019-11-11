<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoImovelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_imovel')->insert(array(array('descricao' => 'Apartamento')));
        DB::table('tipo_imovel')->insert(array(array('descricao' => 'Casa')));
        DB::table('tipo_imovel')->insert(array(array('descricao' => 'Sítio')));
        DB::table('tipo_imovel')->insert(array(array('descricao' => 'Andar')));
    }
}
