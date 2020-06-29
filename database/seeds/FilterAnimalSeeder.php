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
                'valor' => 'Primordial',
                'categoria' => 'pienso-seco'
            ],
            [          
                'animal_name' => 'perro',
                'filter_name' => 'marca',    
                'valor' => 'Dican',
                'categoria' => 'pienso-seco'
            ],
            [          
                'animal_name' => 'perro',
                'filter_name' => 'marca',    
                'valor' => 'Monge',
                'categoria' => 'pienso-seco'
            ],
            [
                'animal_name' => 'perro',
                'filter_name' => 'formato',    
                'valor' => '2 kg',
                'categoria' => 'pienso-seco'
            ],
            [
                'animal_name' => 'perro',
                'filter_name' => 'formato',    
                'valor' => '12 kg',
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
                'valor' => '380 g',
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
                'animal_name' => 'perro',
                'filter_name' => 'marca',    
                'valor' => 'Woolf',
                'categoria' => 'snacks-y-huesos'
            ],
            [
                'animal_name' => 'perro',
                'filter_name' => 'formato',    
                'valor' => '100 g',
                'categoria' => 'snacks-y-huesos'
            ],
            [
                'animal_name' => 'perro',
                'filter_name' => 'formato',    
                'valor' => '200 g',
                'categoria' => 'snacks-y-huesos'
            ],
            [
                'animal_name' => 'perro',
                'filter_name' => 'edad',    
                'valor' => 'puppy',
                'categoria' => 'snacks-y-huesos'
            ],

            [
                'animal_name' => 'perro',
                'filter_name' => 'edad',    
                'valor' => 'adult',
                'categoria' => 'snacks-y-huesos'
            ],

            [
                'animal_name' => 'perro',
                'filter_name' => 'edad',    
                'valor' => 'senior',
                'categoria' => 'snacks-y-huesos'
            ],

            [
                'animal_name' => 'gato',
                'filter_name' => 'marca',    
                'valor' => 'Monge',
                'categoria' => 'pienso-seco'
            ],
            [
                'animal_name' => 'gato',
                'filter_name' => 'marca',    
                'valor' => 'Purity',
                'categoria' => 'pienso-seco'
            ],
            [
                'animal_name' => 'gato',
                'filter_name' => 'marca',    
                'valor' => 'Ownat',
                'categoria' => 'pienso-seco'
            ],

            [
                'animal_name' => 'gato',
                'filter_name' => 'marca',    
                'valor' => 'Monge',
                'categoria' => 'comida-humeda'
            ],

            [
                'animal_name' => 'gato',
                'filter_name' => 'formato',    
                'valor' => '1.5 kg',
                'categoria' => 'pienso-seco'
            ],
            [
                'animal_name' => 'gato',
                'filter_name' => 'formato',    
                'valor' => '80 g',
                'categoria' => 'comida-humeda'
            ],
            [
                'animal_name' => 'gato',
                'filter_name' => 'edad',    
                'valor' => 'kitten',
                'categoria' => 'pienso-seco'
            ],
            [
                'animal_name' => 'gato',
                'filter_name' => 'edad',    
                'valor' => 'adult',
                'categoria' => 'pienso-seco'
            ],
            [
                'animal_name' => 'gato',
                'filter_name' => 'edad',    
                'valor' => 'senior',
                'categoria' => 'pienso-seco'
            ],
            [
                'animal_name' => 'gato',
                'filter_name' => 'edad',    
                'valor' => 'kitten',
                'categoria' => 'comida-humeda'
            ],
            [
                'animal_name' => 'gato',
                'filter_name' => 'edad',    
                'valor' => 'adult',
                'categoria' => 'comida-humeda'
            ],
            [
                'animal_name' => 'gato',
                'filter_name' => 'edad',    
                'valor' => 'senior',
                'categoria' => 'comida-humeda'
            ],


        ];

     
        foreach($filters as $filt){
            DB::table('filtersanimals')->insert($filt);        
        }
    }
}
