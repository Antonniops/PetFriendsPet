<script>
  

    export default {


        data() {
            return {
                recomendado1: '/storage/sensesalmonypavo.png',
                recomendado2: '/storage/senseadultopatoypavo.png',
                recomendado3: '/storage/sensehumedocordero.png',
                product: {},
                producto_agregado: false,
                ya_en_carrito: false
            }
        },
        template: require('./Producto.html'),
        props: ['id'],
        created() {            

            //En cuanto se crea el componente recibimos el producto mediante axios
            axios
                .get(`/api/product/${this.id}`)
                .then(res => {

                    this.product = res.data;

                    //Agregamos path a atributo imagen
                    this.product.imagen = '/storage/' + res.data.imagen;

                    //Agregamos atributo cantidad, uso vue set para que sea reactivo, sino es estatico
                    Vue.set(this.product, 'cantidad_producto', 1)
                    
                   
                })
                .catch(function(error) {
                    console.log(error);
                });

                
        },
        methods: {


            aniadirCarrito(){

                let cart = this.$store.getters.getCart;

                if( ! cart.find(elem => elem.id === this.product.id)){

                    this.$store.commit('addToCart', this.product);

                    this.producto_agregado = true;
                    setTimeout( () => {
                        this.producto_agregado = false;
                    }, 2000)

                    this.$store.commit('saveCart');

                }else{
                    
                    this.ya_en_carrito = true;
                    setTimeout( () => {
                        this.ya_en_carrito = false;
                    }, 2000)
                }
                
            },

            //Recibe del componente hijo <formcantidad-component> la cantidad del producto
            actualizarCantidad(numero_a_modificar){
                this.product.cantidad_producto += numero_a_modificar;
            },
            
        },
        computed: {
            notification_style(){
                return {
                    'alert-success': this.producto_agregado,
                    ocultar: !this.producto_agregado
                }
            },

            ya_en_carrito_style(){
                return {
                    'alert-warning': this.ya_en_carrito,
                    ocultar: !this.ya_en_carrito
                }
            },
            cantidad_producto(){
                return this.product.cantidad_producto;
            }
        },
        

    }
</script>

<style src="./producto.css" scoped>

</style>