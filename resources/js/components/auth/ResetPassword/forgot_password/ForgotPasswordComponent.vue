<template>
  <div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <!--LOGIN-->
            <div class="login my-5 mx-auto">
                <img :src="imglogin" alt="">
                <form autocomplete="off" @submit.prevent="requestResetPassword" method="post" class="my-5 px-3 form-login text-center d-flex flex-column">
                    <input type="email" id="email" class="form-control" placeholder="Email" v-model="email" required>

                    <div v-if="message" class="text-success row ml-5 mt-5">
                        <ul>
                            <li class="row">
                                <i class="fas fa-check-circle mr-2"></i>
                                <p>{{message}}</p>
                            </li>
                        </ul>
                    </div>

                    <button type="submit" class="bg-primary border-0 text-white my-5 py-2 px-4">ENVIAR EMAIL DE RESETEO</button>
                </form>
            </div>
        </div>
      </div>
    </div>

    

  
</template>

<script>
export default {
    data() {
      return {
        'imglogin': '/storage/login-foto.jpg',
        email: null,
        has_error: false,
        message: ''
      }
    },
    methods: {
        requestResetPassword() {
            axios.post("/api/reset-password", {email: this.email})
                .then(res => {
                    this.message = res.data.message;
                })
                .catch(err => {
                    console.log(err);
                })
                
        }
    }
}
</script>

<style lang="css" src="./forgot_password.css" scoped>

</style>