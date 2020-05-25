

<script>
    export default {
        template: require('./login.html'),

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

                console.log(this.login);

               axios.post('/api/login', this.login)
                    .then(res => {

                        const data = {
                            token : res.data.token,
                            user : res.data.user.name
                        }
                                         
                        this.$store.commit('login', data);

                        this.$router.push('/');

                        //Fuerza a recargar toda la pagina, permite cambiar iconon de login a logout
                        this.$router.go(0);
                    })
                    .catch(({response}) => {
                        this.errors = response.data.message;
                       
                    });         
            }
        },
    }
</script>

<style lang="css" src="./login.css" scoped>

</style>