<?php

use Illuminate\Database\Seeder;

class FilterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('filters')->delete();

        $filters = [

           
            [              
                'nombre' => 'marca',
            ],
            [
                'nombre' => 'formato'
            ],
            [
                'nombre' => 'edad'
            ]

        ];

     
        foreach($filters as $filt){
            DB::table('filters')->insert($filt);        
        }
            
        
    }
}
