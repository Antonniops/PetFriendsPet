
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
                    password_confirmation: ''
                },

                message: '',
                errors: ''
            }
        },

        methods: {
            registrar(){

                axios.post('register', this.input)
                    .then(result => {

                        this.message = result;
                        this.errors = result.data.errors;
 
                    })
                    .catch(error => console.log(error));

    
            }
        },
    }
</script>

<style lang="css" src="../login/login.css" scoped>

</style>