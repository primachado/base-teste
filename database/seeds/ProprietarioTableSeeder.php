<?php

use Illuminate\Database\Seeder;

class ProprietarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('proprietario')->insert(array(array('nome' => 'Priscila')));
    }
}
