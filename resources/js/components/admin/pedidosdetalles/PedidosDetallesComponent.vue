<script>
export default {
    template: require('./PedidosDetalles.html'),
    props: ['id'],
    data() {
        return {
            order: [],
            token: this.$store.getters.getToken
        }
    },

    created() {

         // Axios header
        const config = {
            headers: { Authorization: `Bearer ${this.token}` }
        };

        axios
            .post('/api/order/details', {'id': this.id}, config)
            .then(res => {
                this.order = res.data;
            })
    },  
    methods: {
        retroceder(){
            this.$router.back();
        }
    },

    computed: {
        total(){
            let total = 0;
            this.order.forEach(element => {
                total += element.total;
            });

            return total;
        }
    },
}
</script>

<style lang="css" src="./pedidosdetalles.css">
    
</style>