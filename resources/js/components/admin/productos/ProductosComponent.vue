<script>
export default {
    template: require("./Productos.html"),

    data() {
        return {
            productos: [],
            token: this.$store.getters.getToken

        };
    },


    created() {

        // Axios header
        const config = {
            headers: { Authorization: `Bearer ${this.token}` }
        };

        //En cuanto se crea el componente recibimos los productos mediante axios
        axios
            .get("/api/product", config)
            .then(res => {
                this.productos = res.data;
            })
            .catch(function(error) {
                console.log(error);
            });
    },

    methods: {
        deleteProduct(item) {

            var conf = confirm("¿Seguro que quieres borrar el producto?");

            if (conf) {

                // Axios header
                const config = {
                    headers: { Authorization: `Bearer ${this.token}` }
                };

                axios
                    .delete(`/api/product/${item.id}`, config)
                    .then(res => {
                        this.productos.splice(this.productos.indexOf(item), 1);
                    })
                    .catch(err => {
                        console.log(err);
                    });
            }
        }
    }
};
</script>

<style src="./Productos.css" scoped></style>
