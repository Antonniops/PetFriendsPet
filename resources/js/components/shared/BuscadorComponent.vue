<template>
    <div class="busqueda" >
        
        <!-- Formulario busqueda de productos -->
        <form class="form-inline my-2 my-lg-0 justify-content-center">
            <input class="search-input" type="search" placeholder="Buscar producto" aria-label="Search" @keyup="buscarProducto()" v-model="txtInput">
            <a href="" class="lupa">
                <i v-if="searchOrClear" class="fas fa-times-circle text-dark"  @click="limpiarBusqueda()"></i>
                <i v-else class="fas fa-search text-dark"></i>          
            </a>
        </form>


        <div :class="showResults" class="resultado-busqueda">
            <ul>
                <li class="title-res-busqueda">
                    RESULTADO DE BÚSQUEDA
                </li>
                <li v-for="prod in resultBusqueda" :key="prod.id">
                    <router-link :to="{ path: '/productos/' + prod.id }">{{prod.nombre}}</router-link>
                </li>
            </ul>
        </div>
    </div>
</template>



<script>
export default {
    

    data(){
        return {
            txtInput: '',
            resultBusqueda: []
        }
    },
    methods: {
        buscarProducto(){

            this.txtInput.toLowerCase();


             axios
                .get(`/api/product/item/${this.txtInput}`)
                .then(res => {

                    this.resultBusqueda = res.data;           
                    
                })
                .catch(function(error) {
                    console.log(error);
                });
            
           
        },
        limpiarBusqueda(){
            this.txtInput = ''; 
        }
    },

    computed: {
        showResults(){
            return {
                showResults: this.txtInput.length >= 1,
                hideResults: this.txtInput.length < 1
                
            }
        },

        searchOrClear(){
            if(this.txtInput.length >= 1){
                return true;
            }else{
                return false;
            }
        }
    },
 

}
</script>