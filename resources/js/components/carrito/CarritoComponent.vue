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

            // Variable de session de ckeckout
            let session_id = '';

            // Control de datos de envío
             if( ! this.shippingInformation){

                 // Scroll automático al error (especial para versión movil)
                 window.scrollTo({ top: 0, behavior: 'smooth' });
                
                // Variable de control de error
                this.errorDatosEnvio = true;

                // Tiempo de aparicion del mensaje
                setTimeout(() => {
                    this.errorDatosEnvio = false;
                }, 2000);

                return false;

            }

            // Datos para el pedido
            let id = this.$store.getters.getUserId;
            let shippingInformation = this.shippingInformation;
            let carrito = this.$store.getters.getCart;

            //Creacion del pedido
             axios
                    .post('/api/order', {id: id, estado: 'pendiente_pago', carrito: carrito, datosEnvio: shippingInformation})
                    .then(res => {
                        
                        // Request data for checkout sesison
                        let data = {
                            'total_price' : this.precioTotal,
                            'order_id': res.data.order_id,
                            'email': shippingInformation.email
                        }

                        axios
                            .post(`/api/checkOutSession`, data)
                            .then(res => {    

                                // Redirect with created session id
                                this.session_id = res.data.id;   
                                console.log(res.data);

                                // Redirect to Stripe checkout
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
                    });


            

            // Instancia de Stripe
            var stripe = Stripe('pk_test_M413ZLjVzXAKFTE710tZa04o00UhE12Jhi');         
  
        },

    },

}
</script>

<style scoped src="./carrito.css">
    
</style>