<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filter extends Model
{
    protected $table = 'filtersanimals';

    /**
     * Return an array of filters
     *
     * @param  string  $animal
     * @param  string  $tipo_producto

     * @return Collection
     */
    public static function get_filters($animal, $tipo_producto){

        $filters = Filter::where('animal_name', '=', $animal)
                            ->where('categoria', '=', $tipo_producto)
                            ->get();

        return $filters;
    }
  
}
