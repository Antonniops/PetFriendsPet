

<script>
    export default {
        template: require('./Login.html'),

        data(){
            return {
                'imglogin': '/storage/login-foto.jpg',
                 login: {
                     username: '',
                     password: ''
                 },
                 message: '',
                 errors: '',
 
            }
        },

        methods: {
            iniciarSesion(){

                //Manda los datos de inicio de sesión y obtiene el token de acceso
               axios.post('/api/admin/login', this.login)
                    .then(res => {

                        const data = {
                            token : res.data.token,
                            user : res.data.user.name,
                            id : res.data.user.id
                        }
                                         
                        //Actualiza las variables requeridas
                        this.$store.commit('login', data);

                        //Redirect a home
                        this.$router.go('/admin');

                    })
                    .catch(({response}) => {
                        this.errors = response.data.message;                       
                    });         
            },
            
        },
    }
</script>

<style lang="css" src="./login.css" scoped>

</style>