<template>
   
        <div class="row align-items-center">

            <span class="modificar-cantidad" @click="decrement()">
                    <i class="fas fa-minus-circle"></i>
            </span>
            <div class="form-group mx-2 my-auto">
                <!-- MINIMO 0 Y NO PERMITE ESCRIBIR LETRAS -->
                <input type="text" class="form-control" :value="cantidad_producto" min="0" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
            </div>
            <span class="modificar-cantidad" @click="increment()">
                    <i class="fas fa-plus-circle"></i>
            </span>
        </div>
    
</template>

<script>

    export default {
     
        props: ["id_producto", "cantidad_producto"],

        methods: {
            increment(){
                this.$emit('modificarCantidad', 1, this.id_producto);
            },
            decrement(){
                if (this.cantidad_producto > 0){

                    this.$emit('modificarCantidad', -1, this.id_producto);

                }
            }
        },
    }
</script>


<style scoped>
    .form-group {
        width: 80px;
    }
    
    .modificar-cantidad:hover {
        cursor: pointer;
    }
</style>