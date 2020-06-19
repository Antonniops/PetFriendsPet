<template>
    <div>
        <div class="jumbotron text-center mt-3">
            <h1 class="display-3">Muchas gracias.</h1>
            <p class="lead"><strong>Pro favor, revisa tu email</strong> para recibir la confirmación del pedido.</p>
            <hr>
            <p>
                ¿Algún problema? Escríbenos a <a href="mailto:petfriends@gmail.com">petfriends@gmail.com </a> o llámanos a 974 974 394.
            </p>
            <p class="lead">
                <router-link class="btn btn-primary btn-sm" to="/" role="button">Volver a Inicio</router-link>
            </p>
        </div>
    </div>
</template>

<script>
    export default {
        created() {

            let id = this.$store.getters.getUserId;
            let carrito = this.$store.getters.getCart;
            let shippingInformation = this.$store.getters.getShippingInformation;

            console.log(id, carrito, shippingInformation);

            
        
        },
    }
</script>

<style lang="css" scoped>

</style>