
<script>
    export default {
        template: require('./register.html'),

        data(){
            return {
                'imglogin': '/storage/login-foto.jpg',
                input: {
                    name: '',
                    email: '',
                    password: '',
                    password_confirmation: '',
                    promociones: false
                },

                message: '',
                errors: '',
                success:false
            }
        },

        methods: {
            registrar(){
                //Manda el formulario de registro a través de POST
                axios.post('/api/register', this.input)
                    .then(result => {

                        this.message = result;
                        this.errors = result.data.errors;
                        
                        
                        if(result.data.success){
                            
                            this.success = true;

                            setTimeout(() => {
                                this.success = false;
                                this.$router.push('auth-login');
                            }, 1500);
                   
                            
                        }
                        
                    })
                    .catch(error => console.log(error));

    
            }
        },
    }
</script>

<style lang="css" src="../login/login.css" scoped>

</style>