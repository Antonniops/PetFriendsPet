<script>
export default {

     template: require('./Navbar.html'),

    data(){
        return{
            logo_src: '/storage/logo.jpg',
        }
       
    },
    computed: {
        //Numero de items en carrito (badge)
        numero_items(){
            return this.$store.getters.getCart.length;
        },
        //Para obtener nombre de usuario
        logged_user(){
            return this.$store.getters.getUser;
        }
    },
    methods: {
        //Cierra sesión y elimina las variables de login
        logout(){
            this.$store.commit('logout');
        }
    },
}
</script>