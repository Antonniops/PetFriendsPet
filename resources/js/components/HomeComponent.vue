<template>
    <div>

        <cookies-component></cookies-component>
        
        <!--IMAGEN CENTRAL BIENVENIDA A PAGINA-->
        <div class="container mt-1">
            <img :src="imagen_bienvenida" alt="Imagen de bienvenida" class="imagen-principal">
        </div>

       <!--TITULO DESTACADOS CON LINEAS TRANSVERSALES-->
        <section class="row mt-5 align-content-center">
            <div class="d-none d-sm-block col-sm-4">
                <hr class="bg-primary">
            </div>
            <div class="col-sm-4 text-primary text-center">
                <p>DESTACADOS</p>
            </div>
            <div class="d-none d-sm-block col-sm-4">
                <hr class="bg-primary">
            </div>
        </section>

        <!--SECCION SLIDER CON PRODUCTOS DESTACADOS-->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active py-5">
                    <section class="row justify-content-sm-around justify-content-center align-items-center contenedor-slider">
                        <img :src="destacado1" class="d-block col-md-3 col-sm-4 col-6" width="150" alt="...">

                        <div class="text-center col-md-7 col-sm-6 col-12">
                            <h3>Dibaq Sense Pollo y Pavo</h3>
                            <p>Uno de nuestros mejores productos pensados en la salud de tu perro</p>
                            <router-link to="/productos/115" class="btn btn-dark">Ver Producto</router-link>
                        </div>

                    </section>

                </div>
                <div class="carousel-item py-5">
                    <section class="row justify-content-sm-around justify-content-center align-items-center contenedor-slider">
                        <img :src="destacado2" class="d-block col-md-3 col-sm-4 col-6" width="150" alt="...">

                        <div class="text-center col-md-7 col-sm-6 col-12">
                            <h3>Dibaq Sense Pavo y salmón</h3>
                            <p>Uno de nuestros mejores productos pensados en la salud de tu perro</p>
                            <router-link to="/productos/100" class="btn btn-dark">Ver Producto</router-link>
                        </div>

                    </section>
                </div>
                <div class="carousel-item py-5">
                    <section class="row justify-content-sm-around justify-content-center align-items-center contenedor-slider">
                        <img :src="destacado3" class="d-block col-md-3 col-sm-4 col-6" width="150" alt="...">

                        <div class="text-center col-md-7 col-sm-6 col-12">
                            <h3>Dibaq Sense Húmedo Cordero</h3>
                            <p>Uno de nuestros mejores productos pensados en la salud de tu perro</p>
                            <router-link to="/productos/112" class="btn btn-dark">Ver Producto</router-link>
                        </div>

                    </section>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


        <!--SECTION MAS VENDIDOS-->
        <section>
            <section class="row mt-5 align-content-center">
                <div class="d-none d-sm-block col-sm-4">
                    <hr class="bg-primary">
                </div>
                <div class="col-sm-4 text-primary text-center">
                    <p>MÁS VENDIDOS</p>
                </div>
                <div class="d-none d-sm-block col-sm-4">
                    <hr class="bg-primary">
                </div>
            </section>



            <section class="row masvendidos justify-content-around">
                <div class="text-center mb-5 col-sm-3 col-12">
                    <img :src="masvendido1" class="" width="120" alt="...">
                    <div class="mt-4">
                        <h5>Dibaq sense lata Salmón</h5>
                        <router-link to="/productos/113" class="btn btn-secondary">Ver Producto</router-link>
                    </div>
                </div>

                <div class="text-center mb-5 col-sm-3 col-12">
                    <img :src="masvendido2" class="" width="120" alt="...">
                    <div class="mt-4">
                        <h5>Dibaq sense lata ciervo y jabalí</h5>
                        <router-link to="/productos/106" class="btn btn-secondary">Ver Producto</router-link>
                    </div>
                </div>

                <div class="text-center mb-5 col-sm-3 col-12">
                    <img :src="masvendido3" class="" width="120" alt="...">
                    <div class="mt-4">
                        <h5>Dibaq sense lata pollo y pato</h5>
                        <router-link to="/productos/107" class="btn btn-secondary">Ver Producto</router-link>
                    </div>
                </div>



            </section>
        </section>

        
    </div>
</template>

<script>
    export default {
        data(){
            return{
                imagen_bienvenida: '/storage/Bienvenido_a_petfriend.png',
                destacado1: '/storage/senseadultopatoypavo.png',
                destacado2: '/storage/sensesalmonypavo.png',
                destacado3: '/storage/sensehumedocordero.png',
                masvendido1: '/storage/sensehumedosalmon.jpg',
                masvendido2: '/storage/sensehumedojabaliyciervo.jpg',
                masvendido3: '/storage/sensehumedopolloypato.jpg'
            }
        }
    }
</script>

<style lang="css" scoped>

</style>