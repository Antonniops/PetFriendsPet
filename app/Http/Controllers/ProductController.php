<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

use App\Filter;


class ProductController extends Controller
{

    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Product::all();

        return response()
            ->json($productos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);

        return response() 
            ->json($product);
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $name
     * @return \Illuminate\Http\Response
     */
    public function search($name)
    {
        $products = Product::search_product($name);

        return response()
            ->json($products);
    }



    /**
     * Returns a list of brands.
     *
     * @return \Illuminate\Http\Response
     */
    public function categoria($animal, $producto)
    {
        $filters = Filter::get_filters($animal, $producto);
        $products = Product::get_products_filtered($animal, $producto);

        $data = [
            'filters' => $filters,
            'products'=> $products
        ];
        return response()
            ->json($data);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($id) {
            $record = Product::where('id', $id);
            $record->delete();
        }
    }
}
