<script>


export default {
    
    
    template: require('./Carrito.html'),

    data(){
        return {
             imagen_loro:"/storage/loro-carrito.jpg",
             provincias: [],
             errorDatosEnvio: false
        }
    },
    created() {
        axios.get('/api/provincias')
                    .then(res => {
                         this.provincias = res.data.provincias;
                    });
    },
    computed: {
        carrito(){
            return this.$store.getters.getCart
        },
        precioTotal(){
            let precio_total = 0;

            this.carrito.forEach(elem => precio_total += (elem.precio * elem.cantidad_producto));

            return precio_total.toFixed(2);
        },
        shippingInformation(){
            console.log(this.$store.getters.getShippingInformation);
            return this.$store.getters.getShippingInformation;
        }
    },
    methods: {

        //Recibe del componente hijo <formcantidad-component> la cantidad del producto
        actualizarCantidad(numero_a_modificar, prod_id){
          
            this.$store.commit('setQuantity', {
                id: prod_id,
                qty: numero_a_modificar
            });

             this.$store.commit('saveCart');

         },

        eliminarProductoCarrito(id){

            this.$store.commit('removeProductCart', id);
            this.$store.commit('saveCart');
        },

        procesarPago(){

            let session_id = '';

            axios
                .get(`/api/checkOutSession/${this.carrito}`, )
                .then(res => {    
                    this.session_id = res.data.id;   
                    
                     stripe.redirectToCheckout({
                            
                        sessionId: this.session_id

                    }).then(function (result) {
                        
                        // If `redirectToCheckout` fails due to a browser or network
                        // error, display the localized error message to your customer
                        // using `result.error.message`.
                        console.log(result.error.message);
                    });
                })
                .catch(err => {
                    console.log(err);
                });   

            //Instancia de Stripe
            var stripe = Stripe('pk_test_M413ZLjVzXAKFTE710tZa04o00UhE12Jhi');         
  
        },

        crearPedido(){

            var id = this.$store.getters.getUserId;

            if( ! this.shippingInformation){
                
                this.errorDatosEnvio = true;
                setTimeout(() => {
                    this.errorDatosEnvio = false;
                }, 1300);

                return false;
            }

            axios
                .post('/api/order', {id: id, estado: 'pendiente', carrito: this.carrito, datosEnvio: this.shippingInformation})
                .then(res => {
                    console.log(res);
                });
        }
    },

}
</script>

<style scoped src="./carrito.css">
    
</style>