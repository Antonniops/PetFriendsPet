<template>

    <div>
   

   

        <!--IMAGEN CENTRAL BIENVENIDA A PAGINA-->
        <div class="my-5 imagen-portada portada-otros">
        </div>


        <!--SECTION PERROS-->
        <section>
            <section class="row mt-5 align-content-center">
                <div class="d-none d-sm-block col-sm-4">
                    <hr class="bg-primary">
                </div>
                <div class="col-sm-4 text-primary text-center">
                    <p>OTROS</p>
                </div>
                <div class="d-none d-sm-block col-sm-4">
                    <hr class="bg-primary">
                </div>
            </section>


            <section class="slider-categorias mb-5 row justify-content-center">


                <div class="text-center swipe-item d-flex flex-column align-items-center">
                    <a href="">
                        <div class="circulo bg-warning">
                            <img :src="conejos" alt="" width="110">
                        </div>

                        <p class="mt-2 text-primary">CONEJOS</p>
                    </a>
                </div>

                <div class="text-center swipe-item d-flex flex-column align-items-center">
                    <a href="">
                        <div class="circulo bg-azulclaro">
                            <img :src="pajaros" alt="" width="120">
                        </div>

                        <p class="mt-2 text-primary">PÁJAROS</p>
                    </a>

                </div>

                <div class="text-center swipe-item d-flex flex-column align-items-center">
                    <a href="">
                        <div class="circulo bg-verdeoscuro">
                            <img :src="peces" alt="" width="120">
                        </div>

                        <p class="mt-2 text-primary">PECES</p>
                    </a>

                </div>

                <div class="text-center swipe-item d-flex flex-column align-items-center">
                    <a href="">
                        <div class="circulo bg-marronoscuro">
                            <img :src="reptiles" alt="" width="120">
                        </div>

                        <p class="mt-2 text-primary">REPTILES</p>
                    </a>

                </div>

            </section>

            </section>

        </div>
</template>



<script>
export default {
    data(){
        return {
            conejos: '/storage/conejo-portada.jpg',
            pajaros: '/storage/pajaros.jpg',
            reptiles: '/storage/peces.jpg',
            peces: '/storage/reptiles.jpg',
            masvendido1: '/storage/sensehumedosalmon.jpg',
            masvendido2: '/storage/sensehumedojavaliyciervo.jpg',
            masvendido3: '/storage/sensehumedopolloypato.jpg'
        }
    },
    mounted(){
        console.log('Perros mounted');
    }
}
</script>

<style src="../style.css" scoped>
    
</style>