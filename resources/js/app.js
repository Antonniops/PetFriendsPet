/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


window.Vue = require('vue');

window.axios = require('axios');

import VueRouter from 'vue-router';
import { routes } from './routes';
import { store } from './vuexstore';

Vue.use(VueRouter);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */


Vue.component('index-component', require('./components/Index.vue').default);
Vue.component('navbar-component', require('./components/shared/navbar/NavbarComponent.vue').default);
Vue.component('footer-component', require('./components/shared/FooterComponent.vue').default);
Vue.component('formcantidad-component', require('./components/shared/CantidadComponent.vue').default);
Vue.component('buscador-component', require('./components/shared/BuscadorComponent.vue').default);
Vue.component('datosenvio-component', require('./components/carrito/datos_envio/DatosEnvioComponent.vue').default);
Vue.component('dashboard-component', require('./components/admin/dashboard/DashboardComponent.vue').default);
Vue.component('cookies-component', require('./components/shared/cookies/CookiesComponent.vue').default);
Vue.component('admin-login-component', require('./components/admin/login/LoginComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


const router = new VueRouter({
    mode: 'history',
    routes
})

const app = new Vue({
    el: '#app',
    router,
    store
})