<?php

use Illuminate\Database\Seeder;

class FilterAnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('filtersanimals')->delete();

        $filters = [

           
            [          
                'animal_name' => 'perro',
                'filter_name' => 'marca',    
                'valor' => 'Sense',
                'categoria' => 'pienso-seco'
            ],
            [          
                'animal_name' => 'perro',
                'filter_name' => 'marca',    
                'valor' => 'PRIMORDIAL',
                'categoria' => 'pienso-seco'
            ],
            [
                'animal_name' => 'perro',
                'filter_name' => 'formato',    
                'valor' => '2kg',
                'categoria' => 'pienso-seco'
            ],
            [
                'animal_name' => 'perro',
                'filter_name' => 'formato',    
                'valor' => '12kg',
                'categoria' => 'pienso-seco'
            ],

            [
                'animal_name' => 'perro',
                'filter_name' => 'edad',    
                'valor' => 'puppy',
                'categoria' => 'pienso-seco'
            ],

            [
                'animal_name' => 'perro',
                'filter_name' => 'edad',    
                'valor' => 'adult',
                'categoria' => 'pienso-seco'
            ],

            [
                'animal_name' => 'perro',
                'filter_name' => 'edad',    
                'valor' => 'senior',
                'categoria' => 'pienso-seco'
            ],

            [
                'animal_name' => 'perro',
                'filter_name' => 'marca',    
                'valor' => 'Sense',
                'categoria' => 'comida-humeda'
            ],
            
            [
                'animal_name' => 'perro',
                'filter_name' => 'formato',    
                'valor' => '380g',
                'categoria' => 'comida-humeda'
            ],

            [
                'animal_name' => 'perro',
                'filter_name' => 'edad',    
                'valor' => 'puppy',
                'categoria' => 'comida-humeda'
            ],

            [
                'animal_name' => 'perro',
                'filter_name' => 'edad',    
                'valor' => 'adult',
                'categoria' => 'comida-humeda'
            ],

            [
                'animal_name' => 'perro',
                'filter_name' => 'edad',    
                'valor' => 'senior',
                'categoria' => 'comida-humeda'
            ],

            [
                'animal_name' => 'gato',
                'filter_name' => 'marca',    
                'valor' => 'MONGE',
                'categoria' => 'pienso-seco'
            ],

            [
                'animal_name' => 'gato',
                'filter_name' => 'marca',    
                'valor' => 'MONGE',
                'categoria' => 'pienso-seco'
            ]

        ];

     
        foreach($filters as $filt){
            DB::table('filtersanimals')->insert($filt);        
        }
    }
}
