<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProvincesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function provincias()
    {
        $provincias = DB::table('provinces')->select('*')->get();

        return response()->json([
            'provincias' => $provincias
        ]);
    }
}
