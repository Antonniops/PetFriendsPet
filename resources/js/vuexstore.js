import Vuex from 'vuex';
import Vue from 'vue';

Vue.use(Vuex);

let cart = window.localStorage.getItem('carrito');
let cartCount = window.localStorage.getItem('carritoCount');

export const store = new Vuex.Store({

    state: {

        //Variables globales
        carrito: cart ? JSON.parse(cart) : [],
        cartCount: cartCount ? parseInt(cartCount) : 0,
        token: localStorage.getItem('access_token') || null,
        logged_user: localStorage.getItem('access_user') || null,
        logged_user_id: localStorage.getItem('access_user_id') || null,
        shipping_information: JSON.parse(localStorage.getItem('shipping_information')) || null
    },
    mutations: {

        //Añade un producto al carrito
        addToCart(state, product) {
            state.carrito.push(product);
        },

        //Bora un producto del carrito
        removeProductCart(state, id) {

            state.carrito.splice(id, 1)
        },

        //Modifica la cantidad de un producto en carrito
        setQuantity(state, { id, qty }) {

            //Busco el producto con el id pasado por parametro
            var prodIndex = state.carrito.findIndex(x => x.id === id);

            //Actualizo su cantidad(esto se modifica desde el carrito)
            state.carrito[prodIndex].cantidad_producto += qty;

        },

        // Guarda el carrito de compra en local storage
        saveCart(state) {
            window.localStorage.setItem('carrito', JSON.stringify(state.carrito));
            window.localStorage.setItem('carritoCount', state.carrito.length);
        },

        // Guarda el token de acceso en local storage
        login(state, { token, user, id }) {

            // Los guardo antes en las variables porque localStorage no es reactivo
            state.token = token;
            state.logged_user = user;
            state.logged_user_id = id;

            // Se guardan los datos de forma persistente
            window.localStorage.setItem('access_token', token);
            window.localStorage.setItem('access_user', user);
            window.localStorage.setItem('access_user_id', id);

        },

        // Borra el token de acceso y los datos de envío para cerrar sesión
        logout(state) {

            // Borro primero el valor de las variables porque localStorage no es reactivo
            state.token = null;
            state.logged_user = null;
            state.logged_user_id = null;
            state.shipping_information = null;

            // Borro los datos del localStorage
            window.localStorage.removeItem('access_token');
            window.localStorage.removeItem('access_user');
            window.localStorage.removeItem('access_user_id');
            window.localStorage.removeItem('shipping_information');
        },

        //Guarda los datos de envío en local storage
        saveShippingInformation(state, shipping_information) {
            state.shipping_information = shipping_information;

            //Solo se guardarán los datos de envío si está logueado
            if (state.token) {
                window.localStorage.setItem('shipping_information', JSON.stringify(shipping_information));
            }

        },

    },
    getters: {

        //Devuelve el carrito
        getCart: state => {
            return state.carrito;
        },

        //Devuelve el token de acceso
        getToken: state => {
            return state.token;
        },

        //Devuelve el usuario que inicia sesion
        getUser: state => {
            return state.logged_user;
        },

        //Devuelve el usuario que inicia sesion
        getUserId: state => {
            return state.logged_user_id;
        },

        //Devuelve el usuario que inicia sesion
        getShippingInformation: state => {
            return state.shipping_information;
        },

    }

})