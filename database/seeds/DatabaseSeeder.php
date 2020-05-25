<?php

use Illuminate\Database\Seeder;
use App\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(FilterSeeder::class);
        $this->call(AnimalSeeder::class);
        $this->call(FilterAnimalSeeder::class);
        $this->call(ProvincesSeeder::class);
    }
}
