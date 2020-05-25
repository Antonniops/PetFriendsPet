import Vuex from 'vuex';
import Vue from 'vue';

Vue.use(Vuex);

let cart = window.localStorage.getItem('carrito');
let cartCount = window.localStorage.getItem('carritoCount');

export const store = new Vuex.Store({

    state: {

        carrito: cart ? JSON.parse(cart) : [],
        cartCount: cartCount ? parseInt(cartCount) : 0,
        token: localStorage.getItem('access_token') || null,
        logged_user: localStorage.getItem('access_user') || null,
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

        //Guarda el carrito de compra en local storage
        saveCart(state) {
            window.localStorage.setItem('carrito', JSON.stringify(state.carrito));
            window.localStorage.setItem('carritoCount', state.carrito.length());
        },

        //Guarda el token de acceso en local storage
        login(state, { token, user }) {
            window.localStorage.setItem('access_token', token);
            window.localStorage.setItem('access_user', user);
        },

        //Borra el token de acceso para cerrar sesión
        logout(state) {
            window.localStorage.removeItem('access_token');
            window.localStorage.removeItem('access_user');
        }
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
        }
    }
})