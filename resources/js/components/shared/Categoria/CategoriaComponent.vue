
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
                }
            
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

                console.log(productosFiltrados);
                console.log(this.filtros_activos);

                for(const filter in this.filtros_activos){
                    
                    if (this.filtros_activos[filter].length > 0) {

                        this.filtros_activos[filter].forEach(elem => {
     
                            productosFiltrados = productosFiltrados.filter(prod => console.log(`${prod}.[${filter}]`));
                                                    
                        });

                    }

                    console.log(filter)
                }

                console.log(productosFiltrados);

            }
        },


        template: require('./Categoria.html')
    }
</script>

<style lang="css" scoped src="./categoria.css">

</style>