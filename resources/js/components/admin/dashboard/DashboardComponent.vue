<script>
export default {
    template: require('./Dashboard.html'),

    data() {
        return {
            logged: false
        }
    },
    
    created() {

        let user_id = {
            'user_id': localStorage.getItem('access_user_id')
        };

        axios
            .post('/api/admin/check-role', user_id)
            .then(res => {
                if(res.data[0].role_id === 2){
                    this.logged = true;
                }
            })
            .catch(err => {
                console.log(err);
            });

 
    },

    methods: {
        //Cierra sesión y elimina las variables de login
        logout(){
            this.$store.commit('logout');
            this.logged = false;
        }
    },
}
</script>

<style src="./Dashboard.css" scoped>

</style>