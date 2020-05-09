
<script>
export default {
    data(){
        return {
            comida: '/storage/COMIDA PERRO.png',
            comida_humeda: '/storage/sensehumedocordero.png',
            snakcs_y_huesos: '/storage/snackperro.png',
            antiparasitarios: '/storage/antiparasitario.png',
            complementos: '/storage/camaperro.png',
            masvendido1: '/storage/sensehumedosalmon.jpg',
            masvendido2: '/storage/sensehumedojavaliyciervo.jpg',
            masvendido3: '/storage/sensehumedopolloypato.jpg'
        }
    },
    template: require('./Perros.html'),
    mounted(){
        console.log('Perros mounted');
    }
}
</script>

<style src="../style.css" scoped>
    
</style>