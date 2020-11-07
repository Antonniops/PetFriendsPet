<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = [
       'nombre', 'descripcion', 'precio', 'imagen','categoria', 'formato', 'tipo_animal', 'destacado'
   ];


    /**
     * Return an array of search results
     *
     * @param  string  $name
     * @return Collection
     */
   public static function search_product($name){

        //Selecciona las 10 primeras coincidencias
        $products = Product::where('nombre', 'LIKE', '%' . $name . '%')
                              ->take(10)
                              ->get();

        return $products;

   }


   /**
     * Return an array of filtered products
     *
     * @param  string  $animal
     * @param string categoria
     * @return Collection
     */
   public static function get_products_filtered($animal, $categoria){

        $products = Product::where('tipo_animal', '=', $animal)
                            ->where('categoria', '=', $categoria)
                            ->get();

        return $products;

   }

   /**
     * Return an recomended products
     *
     * @param string categoria
     * @return Collection
     */
    public static function obtener_recomendados($animal, $categoria, $id_producto_excluir){

     //Devuelve un listado de 3 productos recomendados como máximo 
     //que no sean el que se está mostrando en pantall
     $products = Product::where('tipo_animal', '=', $animal)
                         ->where('categoria', '=', $categoria)
                         ->where('id', '!=', $id_producto_excluir)
                         ->take(3)
                         ->get();

     return $products;

}

   public $timestamps = false;

    /**
     * Get the product_orders for a product.
     */
     public function product_orders()
     {
        return $this->hasMany('App\ProductOrder');
     }

     /**
     * Increments visits of the product.
     */
    public static function increment_visits($id){
         
          // BUsca el producto solicitado
          $product = Product::find($id);

          // Comprueba si existe el producto
          if( ! $product){
               return false;
          }

          // Incrementa el contador de visitas
          $product->increment('visitas');

          // Guardamos el cambio
          $product->save();

          return true;

    }
}
