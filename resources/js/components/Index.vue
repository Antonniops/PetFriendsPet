<template>

    
    <div>


            <navbar-component></navbar-component>
            
            <main class="container">
                    <router-view :key="$route.fullPath"></router-view>
                </main>

            <footer-component></footer-component>
        
    
    </div>
</template>




<script>
export default {

    computed:{
         routeName(){
            return this.$router.currentRoute.path
        }
    },

}
</script>