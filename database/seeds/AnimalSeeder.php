<?php

use Illuminate\Database\Seeder;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animals')->delete();

        $animals = [

           
            [              
                'nombre' => 'perro',
            ],
            [
                'nombre' => 'gato'
            ],
            [
                'nombre' => 'pajaro'
            ],
            [
                'nombre' => 'conejo'
            ],
            [
                'nombre' => 'reptil'
            ],
            [
                'nombre' => 'pez'
            ],

        ];

     
        foreach($animals as $animal){
            DB::table('animals')->insert($animal);        
        }
    }
}
