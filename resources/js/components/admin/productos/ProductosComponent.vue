
<script>
    export default {
        template: require('./Productos.html'),

        data() {
            return {
                productos: []
            }
        },

        created() {
            
            //En cuanto se crea el componente recibimos los productos mediante axios
            axios
                .get('/api/product')
                .then(res => {

                    this.productos = res.data;
                    console.log(res.data);
                   
                })
                .catch(function(error) {
                    console.log(error);
                });
        },
    }
</script>

<style src="./Productos.css" scoped>

</style>