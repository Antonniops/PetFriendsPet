
<script>
export default {
    template: require('./Pedidos.html'),
    data() {
        return {
            pedidos: [],
            completedOrder : null,
            token: this.$store.getters.getToken
        }
    },

    created() {

        // Axios header
        const config = {
            headers: { Authorization: `Bearer ${this.token}` }
        };

        // Peticion
        axios
            .get('/api/order', config)
            .then(res => {
                this.pedidos = res.data;
            });
    },

    methods: {

        completeOrder(order_id){

            // Window confirm
            var conf = confirm("¿Marcar pedido como realizado?");

            if (conf) {

                // Request Bearer Token
                const config = {
                    headers: { Authorization: `Bearer ${this.token}` }
                };

                axios
                    .post(`/api/order/complete`, { order_id: order_id}, config)
                    .then(res => {

                        // Check order id
                        var pedido = this.pedidos.find(elem => elem.id == order_id);

                        // Get index id
                        pedido = this.pedidos.indexOf(pedido);
                        
                        // Set as completed
                        this.pedidos[pedido].estado = "completado";

                    })
                    .catch((error)  => {

                        this.completedOrder = error.response.data.msg;

                        setTimeout(() => {
                            this.completedOrder = null;
                        }, 3000);
                        
                    });
            }

        },
    },
}
</script>

<style src="./pedidos.css">

</style>