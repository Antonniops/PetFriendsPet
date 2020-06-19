
<script>
export default {

    template: require('./ResetPasswordForm.html'),

    data() {
      return {
        'imglogin': '/storage/login-foto.jpg',
        token: null,
        email: null,
        password: null,
        password_confirmation: null,
        has_error: false,
        errors: ''
      }
    },
    methods: {
        resetPassword() {
            axios.post("/api/reset/password/", {
                token: this.$route.params.token,
                email: this.email,
                password: this.password,
                password_confirmation: this.password_confirmation
            })
            .then(result => {
                
                // console.log(result.data);
                this.$router.push('/auth-login')
                
            })
            .catch(({response}) => {
                this.errors = Object.values(response.data.errors);   
                this.errors = this.errors.flat();                   
            })
           
        }
    }
}
</script>


<style lang="css" src="./reset_password.css" scoped>

</style>