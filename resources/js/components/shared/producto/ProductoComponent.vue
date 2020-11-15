<script>
  

    export default {


        data() {
            return {
                recomendado1: '/storage/sensesalmonypavo.png',
                recomendado2: '/storage/senseadultopatoypavo.png',
                recomendado3: '/storage/sensehumedocordero.png',
                product: {},
                producto_agregado: false,
                ya_en_carrito: false,
                productos_recomendados: []
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

                   
                   this.obtenerRecomendados();
                })
                .catch(function(error) {
                    console.log(error);
                });

            axios
                .post('/api/product/increment_visits', {id_producto: this.id})
                .then(res => {
                    console.log(res.msg);
                });
         
        },
        methods: {


            aniadirCarrito(){

                //Recibe el carrito de vuex
                let cart = this.$store.getters.getCart;

                //Si no se ha encontrado el producto en el carrito lo agrega
                if( ! cart.find(elem => elem.id === this.product.id)){

                    //Vuex mutation addToCart
                    this.$store.commit('addToCart', this.product);

                    //Timeout para mostrar una alerta
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                    this.producto_agregado = true;
                    setTimeout( () => {
                        this.producto_agregado = false;
                    }, 2000)

                    //Vuex mutation para guardar en localStorage
                    this.$store.commit('saveCart');

                }else{
                    
                    //Muestra una alerta en caso de que ya esté en el carrito
                    window.scrollTo({ top: 0, behavior: 'smooth' });
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

            //Obtiene un listado de productos recomendados para este producto
            obtenerRecomendados(){

                //Datos para obtener la consulta
                let datos = {
                    'animal' : this.product.tipo_animal,
                    'categoria': this.product.categoria,
                    'id_producto_excluir' : this.product.id
                }

                axios
                    .post('/api/product/recomendados', datos)
                    .then(res => {
                        this.productos_recomendados = res.data.products;
                    })
                    .catch(err => {
                        console.log(err);
                    });

            }
            
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