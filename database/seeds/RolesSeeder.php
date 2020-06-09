<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [

           
            [              
                'name' => 'Cliente',
            ],
            [
                'name' => 'Administrador'
            ]

        ];

     
        foreach($roles as $rol){
            DB::table('roles')->insert($rol);        
        }
    }
}
