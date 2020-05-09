//Rutas
import Index from './components/Index.vue';

import PerrosComponent from './components/animales/perros/PerrosComponent.vue';
import PerrosPiensoSecoComponent from './components/animales/perros/piensoseco/PerrosPiensosecoComponent.vue';
import PerrosComidahumedaComponent from './components/animales/perros/comidahumeda/PerrosComidahumedaComponent.vue';
import PerrosSnacksyhuesosComponent from './components/animales/perros/snacksyhuesos/PerrosSnacksyhuesosComponent.vue';
import PerrosAntiparasitariosComponent from './components/animales/perros/antiparasitarios/PerrosAntiparasitariosComponent.vue';
import PerrosComplementosComponent from './components/animales/perros/complementos/PerrosComplementosComponent.vue';

import GatosComponent from './components/animales/gatos/GatosComponent.vue';
import GatosPiensosecoComponent from './components/animales/gatos/piensoseco/GatosPiensosecoComponent.vue';
import GatosComidahumedaComponent from './components/animales/gatos/comidahumeda/GatosComidahumedaComponent.vue';
import GatosArenasylechosComponent from './components/animales/gatos/arenasylechos/GatosArenasylechosComponent.vue';
import GatosComplementosComponent from './components/animales/gatos/complementos/GatosComplementosComponent.vue';



import OtrosComponent from './components/animales/otros/OtrosComponent.vue';


import CategoriaComponent from './components/shared/Categoria/CategoriaComponent.vue';



import ProductoComponent from './components/shared/Producto/ProductoComponent.vue';

import LoginComponent from './components/auth/Login/LoginComponent.vue';
import RegisterComponent from './components/auth/Register/RegisterComponent.vue';


import CarritoComponent from './components/shared/Carrito/CarritoComponent.vue';

export const routes = [{
        path: '/',
        component: Index,
        name: 'root'
    },

    {
        path: '/perros',
        component: PerrosComponent,
        name: 'perros',
        children: [{
                path: '/pienso-seco',
                component: PerrosPiensoSecoComponent
            }, {
                path: '/comida-humeda',
                component: PerrosComidahumedaComponent
            },
            {
                path: '/snacks-y-huesos',
                component: PerrosSnacksyhuesosComponent
            },
            {
                path: '/antiparasitarios',
                component: PerrosAntiparasitariosComponent
            },
            {
                path: '/complementos',
                component: PerrosComplementosComponent
            },
        ]
    },

    {
        path: '/gatos',
        component: GatosComponent,
        name: 'gatos',
        children: [{
                path: '/pienso-seco',
                component: GatosPiensosecoComponent
            },
            {
                path: '/comida-humeda',
                component: GatosComidahumedaComponent
            },
            {
                path: '/arenas-y-lechos',
                component: GatosArenasylechosComponent
            },
            {
                path: '/complementos',
                component: GatosComplementosComponent
            }
        ]
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
    }


];