<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $users = [


           

        ];


        foreach ($users as $us) {
            DB::table('users')->insert($us);
        }
    }
}
