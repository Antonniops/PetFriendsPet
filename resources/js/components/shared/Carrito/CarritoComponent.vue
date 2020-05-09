<script>


export default {
    
    template: require('./Carrito.html'),

    data(){
        return {
             imagen_loro:"/storage/loro-carrito.jpg"
        }
    },
    computed: {
        carrito(){
            return this.$store.getters.getCart
        },
        precioTotal(){
            let precio_total = 0;

            this.carrito.forEach(elem => precio_total += (elem.precio * elem.cantidad_producto));

            return precio_total.toFixed(2);
        }
    },
    methods: {
        //Recibe del componente hijo <formcantidad-component> la cantidad del producto
        actualizarCantidad(numero_a_modificar, prod_id){
          
            this.$store.commit('setQuantity', {
                id: prod_id,
                qty: numero_a_modificar
            });

         },
        eliminarProductoCarrito(id){

            this.$store.commit('removeProductCart', id);
        }
    },

}
</script>

<style scoped src="./carrito.css">
    
</style>