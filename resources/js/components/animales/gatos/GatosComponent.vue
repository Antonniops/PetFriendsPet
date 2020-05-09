


<script>
export default {
    data(){
        return {
            comida: '/storage/pienso-seco-gatos.png',
            comida_humeda: '/storage/comida-humeda-gatos.png',
            arenas_y_lechos: '/storage/arena-gatos.png',
            rascadores: '/storage/rascador.png',
            juguetes: '/storage/juguete-gato.png',
            masvendido1: '/storage/sensehumedosalmon.jpg',
            masvendido2: '/storage/sensehumedojavaliyciervo.jpg',
            masvendido3: '/storage/sensehumedopolloypato.jpg'
        }
    },
    template: require('./Gatos.html'),
    mounted(){
        console.log('Perros mounted');
    }
}
</script>

<style src="../style.css" scoped>
    
</style>