<script>
export default {
    template: require('./Dashboard.html'),
    created() {
        console.log("Dashboard creado");
    },
    mounted(){
        console.log("nombre ruta", this.$router.currentRoute.path);
    }
}
</script>

<style src="./Dashboard.css" scoped>

</style>