<script>
export default {

    template: require('./DatosEnvio.html'),

    data(){
        return {
             provincias: [],
             errors: [],
             data: {
                 email: '',
                 codigo_postal: '',
                 calle: '',
                 municipio: '',
                 numero: ''
             },
             success: false,
             success_message: ""
        }
    },

     created() {
        axios.get('/api/provincias')
                    .then(res => {
                         this.provincias = res.data.provincias;
                    });
    },
    methods: {
        validarDatos(){
            
            axios.post('/api/shipping-information', this.data)
                        .then(res => {
                            this.errors = res.data.errors;   
                            if (res.data.success) {
                                this.success = true;
                                this.success_message = res.data.success
                            }else{
                                this.success = false;
                            }                                        
                        })
                        .catch(err => {
                            console.log(err)
                            this.errors = err.errors
                        })
        },
        guardarDatosEnvio(){

            if(this.success){
                //Si no hay errores en la validación se guardan los datos de envio en localStorage
                this.$store.commit('saveShippingInformation', this.data);
                
            }

        }
    },
}
</script>