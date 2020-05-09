import Vuex from 'vuex';
import Vue from 'vue';

Vue.use(Vuex)

export const store = new Vuex.Store({
    state: {
        carrito: []
    },
    mutations: {

        addToCart(state, product) {
            state.carrito.push(product);
        },
        removeProductCart(state, id) {

            state.carrito.splice(id, 1)
        },
        setQuantity(state, { id, qty }) {

            //Busco el producto con el id pasado por parametro
            var prodIndex = state.carrito.findIndex(x => x.id === id);

            //Actualizo su cantidad(esto se modifica desde el carrito)
            state.carrito[prodIndex].cantidad_producto += qty;

        }
    },
    getters: {
        getCart: state => {
            return state.carrito;
        }
    }
})