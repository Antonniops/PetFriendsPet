<template>

    
    <div>

        <div v-if="routeName !== '/admin'">
            <navbar-component></navbar-component>
            
            <main class="container">
                    <router-view :key="$route.fullPath"></router-view>
                </main>

            <footer-component></footer-component>
        </div>

        <div v-else>
            <main>
                    <router-view :key="$route.fullPath"></router-view>
                </main>
        </div>
        
    </div>
</template>




<script>
export default {

    computed:{
         routeName(){
            return this.$router.currentRoute.path
        }
    },

    
    mounted(){
        console.log(this.$route.name);
    }
}
</script>