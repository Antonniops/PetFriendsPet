//Rutas
import Index from './components/Index.vue';

import PerrosComponent from './components/animales/perros/PerrosComponent.vue';
import GatosComponent from './components/animales/gatos/GatosComponent.vue';
import OtrosComponent from './components/animales/otros/OtrosComponent.vue';
import CategoriaComponent from './components/shared/Categoria/CategoriaComponent.vue';
import ProductoComponent from './components/shared/Producto/ProductoComponent.vue';
import LoginComponent from './components/auth/Login/LoginComponent.vue';
import RegisterComponent from './components/auth/Register/RegisterComponent.vue';
import CarritoComponent from './components/Carrito/CarritoComponent.vue';
import SobrenosotrosComponent from './components/sobrenosotros/SobrenosotrosComponent.vue';

export const routes = [{
        path: '/',
        component: Index,
        name: 'root'
    },

    {
        path: '/perros',
        component: PerrosComponent,
        name: 'perros'
    },

    {
        path: '/gatos',
        component: GatosComponent,
        name: 'gatos'
    },
    {
        path: '/otros',
        component: OtrosComponent,
        name: 'otros',

    },
    {
        path: '/productos/:id',
        component: ProductoComponent,
        props: true
    },
    {
        path: '/carrito',
        component: CarritoComponent,
        props: true
    },

    {
        path: '/categoria/:animal/:producto',
        component: CategoriaComponent,
        props: true
    },

    {
        path: '/auth-login',
        component: LoginComponent
    },

    {
        path: '/auth-register',
        component: RegisterComponent
    },
    {
        path: '/sobre-nosotros',
        component: SobrenosotrosComponent
    },



];