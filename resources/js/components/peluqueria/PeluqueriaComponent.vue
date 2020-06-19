
<script>
    import { Datetime } from 'vue-datetime';
    // You need a specific loader for CSS files
    import 'vue-datetime/dist/vue-datetime.css'

    export default {
        template: require('./Peluqueria.html'),
        components: {
            datetime: Datetime
        },
        data(){
            return{
                img_circulo: '/storage/circulo-peluqueria.png',
                img_calendario : '/storage/lavado-perro.png',
                date: null,
                mostrarHorario: true,
                alertLogin: false,
                alertSuccess: false,
                message: ''
            }
        },
        methods: {
            guardarCita(){
                
                //Si no inicia sesión no podrá coger cita
                if( ! this.$store.getters.getToken){

                    this.alertLogin = true;
                    this.message = "Debes iniciar sesión para coger una cita.";

                    setTimeout(() => {
                        this.alertLogin = false;
                    }, 1500);

                    return null;
                }

                let newDate = this.date.split("T")[0];
                let data = {
                    'fecha_cita':newDate,
                    'user_id': this.$store.getters.getUserId
                };

                axios
                    .post('/api/appointment', data)
                    .then(res => {

                            this.message = res.data.message;

                            if(res.data.status == 201){
                                this.alertSuccess = true;
           
                                setTimeout(() => {
                                    this.alertSuccess = false;
                                }, 1500);

                            }else{

                                this.alertLogin = true;

                                setTimeout(() => {
                                    this.alertLogin = false;
                                }, 1500);

                            }        
                            
                    })
                    .catch(err => {
                        console.log(err);
                    });
            },
            switchHorarioTarifa(){
                this.mostrarHorario = !this.mostrarHorario;
            }
        },
    }
</script>

<style lang="css" scoped src="./peluqueria.css">

</style>