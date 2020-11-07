<template>
    <div>       
            <div class="row">
                <nav class="sidebar-navigation row col-1 ml-2">
                    <ul>
                        <li class="mb-4 dropdown">
                            <div class="dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user"></i>
                                <span class="tooltip">Perfil</span>
                            </div>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <button class="btn dropdown-item p-3" @click="logout()">Cerrar Sesión</button>
                            </div>

                        </li>

                        <li class="mb-5">
                            <router-link to="/admin/productos">
                                <i class="fas fa-bone"></i>
                                <span class="tooltip">Productos</span>
                            </router-link>
                        </li>
                        <li class="mb-5">
                            <i class="fas fa-calendar-week"></i>
                            <span class="tooltip">Peluquería</span>
                        </li>
                        <li class="mb-5">
                            <router-link to="/admin/pedidos">
                                <i class="fab fa-shopify text-white"></i>
                                <span class="tooltip">Pedidos</span>
                            </router-link>
                        </li>
                        
                        <li class="mb-5">
                            <router-link to="/admin/dashboard">
                                <i class="fas fa-chart-pie"></i>
                                <span class="tooltip">Estadísticas</span>
                            </router-link>
                        </li>
                        <li class="mb-5">
                            <i class="fa fa-sliders"></i>
                            <span class="tooltip">Settings</span>
                        </li>
                    </ul>

                </nav>

                <div class="col-10 mx-auto">
                    <router-view></router-view>
                </div>
            </div>

    </div>
</template>


<script>
export default {

 

    methods: {
        //Cierra sesión y elimina las variables de login
        logout(){

            let token = this.$store.getters.getToken;
 
            let data = {
                user_id : this.$store.getters.getUserId
            };

            // Axios header
            const config = {
                headers: { Authorization: `Bearer ${token}` }
            };

            axios
                .post('/api/logout', data, config)
                .then(res => {

                    this.$store.commit('logout');   
                       
                    this.$router.push('admin-login')      
                
                })
                .catch(function(error) {
                    console.log(error);
                });
        }
    },
}
</script>

<style>
    * {
        margin: 0;
        padding: 0;
        list-style: none;
        font-family: 'Lato', sans-serif;
        line-height: 1;
    }
    .fas{
        color: white;
    }

    body {
        background-color: #F5F6F8;
        overflow: hidden;
    }

    .sidebar-navigation {
        display: inline-block;
        min-height: 100vh;
        width: 80px;
        background-color: #313443;
    }

    .sidebar-navigation ul {
        text-align: center;
        color: white;
    }

    .sidebar-navigation ul li {
        padding: 28px 0;
        cursor: pointer;
        -webkit-transition: all ease-out 120ms;
        transition: all ease-out 120ms;
    }

    .sidebar-navigation ul li i {
        display: block;
        font-size: 24px;
        -webkit-transition: all ease 450ms;
        transition: all ease 450ms;
    }

    .sidebar-navigation ul li .tooltip {
        display: inline-block;
        position: absolute;
        background-color: #313443;
        padding: 8px 15px;
        border-radius: 3px;
        margin-top: -26px;
        left: 90px;
        opacity: 0;
        visibility: hidden;
        font-size: 13px;
        letter-spacing: .5px;
    }

    .sidebar-navigation ul li .tooltip:before {
        content: '';
        display: block;
        position: absolute;
        left: -4px;
        top: 10px;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
        width: 10px;
        height: 10px;
        background-color: inherit;
    }

    .sidebar-navigation ul li:hover {
        background-color: #22252E;
    }

    .sidebar-navigation ul li:hover .tooltip {
        visibility: visible;
        opacity: 1;
    }

    .sidebar-navigation ul li.active {
        background-color: #22252E;
    }

    .sidebar-navigation ul li.active i {
        color: #98D7EC;
    }
</style>