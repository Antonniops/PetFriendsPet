
<script>
    export default {

        data(){
            return{

                imagenprueba: '/storage/senseadultopatoypavo.png',
                marcas: [],
                formato: [],
                edad: [],
                productos: [],
                filtros_activos: {
                    marca: [],
                    edad: [],
                    formato: []
                },
                productsToShow: 10
            
            }
        },

        props: ['animal', 'producto'],

        mounted() {

            //En cuanto se crea el componente recibimos los filtros mediante axios
            axios
                .get(`/api/product/categoria/${this.animal}/${this.producto}`)
                .then(res => {

                    this.marcas = res.data.filters.filter(elem => elem.filter_name === 'marca');
                    this.formato =  res.data.filters.filter(elem => elem.filter_name === 'formato');
                    this.edad =  res.data.filters.filter(elem => elem.filter_name === 'edad');

                    this.productos = res.data.products;

                })
                .catch(function(error) {
                    console.log(error);
                });
            
        },

        methods: {
            aplicarFiltros(){
                
                let productosFiltrados = this.productos;
                let filt = this.filtros_activos;

              
                //Se recorre el objeto de filtros activados y se devuelve una copia filtrada del array de productos
                for(const filter in filt){
                    
                    if (filt[filter].length > 0) {

                        filt[filter].forEach(elem => {
     

                            if (filter == "formato") {
                                
                                //El formato viene en forma de "2 kg" y el producto tiene la propiedad peso 2, unidad kg
                                //Es necesario hacer split y sacar el primer valor para poder filtrarlo
                                productosFiltrados = productosFiltrados.filter(prod => prod.peso_unidad == elem.split(" ")[0]);

                            }else{

                                productosFiltrados = productosFiltrados.filter(prod => prod["" + filter + ""] == elem);

                            }
                                                           
                        });

                    }

                }

                //Si no se ha aplicado ningun filtro se devuelve igual
                return productosFiltrados.slice(0, this.productsToShow);

            },

            filtrarPrecioAscendente(){
                let productosOrdenados = this.productos;

                productosOrdenados.sort(function(a,b){
                    return a.precio - b.precio;
                });

                return productosOrdenados;

            },

            filtrarPrecioDescendente(){
                let productosOrdenados = this.productos;

                productosOrdenados.sort(function(a,b){
                    return b.precio - a.precio;
                });

                return productosOrdenados;

            },

            restablecerFiltros(){
                this.filtros_activos =  {
                    marca: [],
                    edad: [],
                    formato: []
                };

            }
        },


        template: require('./Categoria.html')
    }
</script>

<style lang="css" scoped src="./categoria.css">

</style>