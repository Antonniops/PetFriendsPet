<script>
export default {
    template: require("./Productos.html"),

    data() {
        return {
            productos: []
        };
    },


    created() {
        //En cuanto se crea el componente recibimos los productos mediante axios
        axios
            .get("/api/product")
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
                axios
                    .delete(`/api/product/${item.id}`)
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
