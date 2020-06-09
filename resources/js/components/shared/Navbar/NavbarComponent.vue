<script>
export default {

     template: require('./Navbar.html'),

    data(){
        return{
            logo_src: '/storage/logo.jpg',
        }
       
    },
    mounted() {
        console.log(this.logged_user)
    },
    computed: {
        numero_items(){
            return this.$store.getters.getCart.length;
        },
        logged_user(){
            return this.$store.getters.getUser;
        }
    },
    methods: {
        logout(){
            this.$store.commit('logout');
            this.$router.go(0);
        }
    },
}
</script>