
<script>
export default {
    template: require('./Pedidos.html'),
    data() {
        return {
            pedidos: []
        }
    },

    created() {

        // Peticion
        axios
            .get('/api/order')
            .then(res => {
                this.pedidos = res.data;
            });
    },

    methods: {
        completeOrder(order_id){
            var conf = confirm("¿Marcar pedido como realizado?");

            if (conf) {
                axios
                    .post(`/api/order/complete`, { order_id: order_id})
                    .then(res => {
                        var pedido = this.pedidos.find(elem => elem.id == order_id);
                        pedido = this.pedidos.indexOf(pedido);
                        
                        this.pedidos[pedido].estado = "completado";
                    });
            }
        },
    },
}
</script>

<style src="./pedidos.css">

</style>