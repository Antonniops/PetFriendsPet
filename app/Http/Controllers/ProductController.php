<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
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


        //Mensajes de validación
        $messages = [
            'precio.regex' => 'El campo precio debe tener un máximo de 2 decimales separados por puntos.',
            'precio_oferta.regex' => 'El campo precio oferta debe tener un máximo de 2 decimales separados por puntos',
            'imagen.image' => 'Debes introducir una imagen.'
        ];

        //Aplicar reglas de validación
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|max:255',
            'descripcion' => 'required',
            'precio' => 'required|max:6|regex:/^-?[0-9]+(?:\.[0-9]{1,2})?$/',
            'precio_oferta' => 'max:6|regex:/^-?[0-9]+(?:\.[0-9]{1,2})?$/',
            'imagen' => 'required|image|file',
            'marca' => 'required|alpha|max:32',
            'categoria' => 'required|alpha_dash|max:64',
            'ud_peso' => 'required|alpha|max:4',
            'peso_unidad' => 'required|numeric|max:11',
            'tipo_animal' => 'required|alpha|max:32',
            'destacado' => 'required',
            'edad' => 'required|alpha|max:32'
        ], $messages);

    
        //Mensaje json con los errores
        if ($validator->fails()) {    
            return response()->json($validator->errors(), 200);
        };

       
        //Guardado de imagen
        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');

            $file = $request->imagen;

            //Obtiene el nombre del fichero
            $filename = $file->getClientOriginalName();

            //Lo almacena en el espacio publico
            $file = $file->storeAs('public', $filename);
        };
        
        //Recogemos los datos del formulario
        $product = [
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'precio' => $request->input('precio'),
            'precio_oferta' => $request->input('precio_oferta'),
            'imagen' => $filename ?: null,
            'marca' => $request->input('marca'),
            'categoria' => $request->input('categoria'),
            'ud_peso' => $request->input('ud_peso'),
            'peso_unidad' => $request->input('peso_unidad'),
            'precio_kilogramo' => $request->input('precio_kilogramo'),
            'tipo_animal' => $request->input('tipo_animal'),
            'edad' => $request->input('edad'),
        ];

        //Si se manda true se marca como 0 en la bd
        $request->destacado ? $product['destacado'] = 1 : $product['destacado'] = 0;


        Product::insert($product);

        return response()
            ->json(['success' => $product]);
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
     * Returns a list of recommended products.
     *
     * @return \Illuminate\Http\Response
     */
    public function obtener_recomendados(Request $request)
    {

        $animal = $request->input('animal');
        $categoria = $request->input('categoria');
        $id_producto_excluir = $request->input('id_producto_excluir');

        //Obtiene una lista de 3 productos recomendados como máximo
        $products = Product::obtener_recomendados($animal, $categoria, $id_producto_excluir);

        $data = [
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
        
        //Mensajes de validación
        $messages = [
            'precio.regex' => 'El campo precio debe tener un máximo de 2 decimales separados por puntos.',
            'precio_oferta.regex' => 'El campo precio oferta debe tener un máximo de 2 decimales separados por puntos',
            'imagen.image' => 'Debes introducir una imagen.'
        ];

        //Aplicar reglas de validación
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|max:255',
            'descripcion' => 'required',
            'precio' => 'required|max:6|regex:/^-?[0-9]+(?:\.[0-9]{1,2})?$/',
            'precio_oferta' => 'max:6|regex:/^-?[0-9]+(?:\.[0-9]{1,2})?$/',
            'imagen' => 'required|image|file',
            'marca' => 'required|alpha|max:32',
            'categoria' => 'required|alpha_dash|max:64',
            'ud_peso' => 'required|alpha|max:4',
            'peso_unidad' => 'required|numeric|max:11',
            'tipo_animal' => 'required|alpha|max:32',
            'destacado' => 'required',
            'edad' => 'required|alpha|max:32'
        ], $messages);

    
        //Mensaje json con los errores
        if ($validator->fails()) {    
            return response()->json($validator->errors(), 200);
        };

        //Buscamos el producto solicitado
        $product_finded = Product::find($id);

        if(!$product_finded){
            return response() 
            ->json('No se ha encontrado ese producto', 201);
        }

        //Guardado de imagen
        if ($request->hasFile('imagen')) {

            //Borramos su antigua imagen
            Storage::delete($product_finded->imagen);

            $file = $request->file('imagen');

            $file = $request->imagen;

            //Obtiene el nombre del fichero
            $filename = $file->getClientOriginalName();

            //Lo almacena en el espacio publico
            $file = $file->storeAs('public', $filename);
        };
        
        //Recogemos los datos del formulario
        $product = [
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'precio' => $request->input('precio'),
            'precio_oferta' => $request->input('precio_oferta'),
            'imagen' => $filename ?: null,
            'marca' => $request->input('marca'),
            'categoria' => $request->input('categoria'),
            'ud_peso' => $request->input('ud_peso'),
            'peso_unidad' => $request->input('peso_unidad'),
            'precio_kilogramo' => $request->input('precio_kilogramo') ?: null,
            'tipo_animal' => $request->input('tipo_animal'),
            'edad' => $request->input('edad'),
        ];

    
        //Si se manda true se marca como 0 en la bd
        $request->destacado ? $product['destacado'] = 1 : $product['destacado'] = 0;

        //Actualizamos con los datos recibidos
        $product_finded->update($product);
      

        return response()
            ->json(['success' => $product]);
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

            $record = Product::find($id);

            if($record !== null){
                $record->delete();

                return response() 
                ->json('Borrado correctamente', 201);
            }

            return response() 
            ->json('No se ha encontrado ese producto', 201);
        }

       
    }
}
