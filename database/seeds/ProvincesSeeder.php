<?php

use Illuminate\Database\Seeder;

class ProvincesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provinces = [

           
            [              
                'nombre' => 'BENALMÁDENA',
            ],
            [
                'nombre' => 'FUENGIROLA'
            ],
            [
                'nombre' => 'TORREMOLINOS'
            ]

        ];

     
        foreach($provinces as $prov){
            DB::table('provinces')->insert($prov);        
        }
    }
}
