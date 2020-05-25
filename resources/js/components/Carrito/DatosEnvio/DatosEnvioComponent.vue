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
                 municipio: ''
             }
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
            console.log(this.data);
            axios.post('/api/shipping-information', this.data)
                        .then(res => {
                            this.errors = res.data.errors;                         
                        })
                        .catch(err => {
                            console.log(err)
                            this.errors = err.errors
                        })
        }
    },
}
</script>