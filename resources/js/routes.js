//Rutas
import Index from './components/Index.vue';
import HomeComponent from './components/HomeComponent.vue';


import PerrosComponent from './components/animales/perros/PerrosComponent.vue';
import GatosComponent from './components/animales/gatos/GatosComponent.vue';
import OtrosComponent from './components/animales/otros/OtrosComponent.vue';
import CategoriaComponent from './components/shared/Categoria/CategoriaComponent.vue';
import ProductoComponent from './components/shared/Producto/ProductoComponent.vue';
import LoginComponent from './components/auth/Login/LoginComponent.vue';
import RegisterComponent from './components/auth/Register/RegisterComponent.vue';

import ForgotPasswordComponent from './components/auth/ResetPassword/ForgotPassword/ForgotPasswordComponent.vue';
import ResetPasswordFormComponent from './components/auth/ResetPassword/ResetPassword/ResetPasswordFormComponent.vue';

import CarritoComponent from './components/Carrito/CarritoComponent.vue';
import SobrenosotrosComponent from './components/sobrenosotros/SobrenosotrosComponent.vue';
import ContactoComponent from './components/contacto/ContactoComponent.vue';

import DashboardComponent from './components/admin/dashboard/DashboardComponent.vue';
import AdminProductosComponent from './components/admin/productos/ProductosComponent.vue';



export const routes = [{
        path: '/',
        component: HomeComponent,
        name: 'home'
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
    {
        path: '/contacto',
        component: ContactoComponent
    },
    {
        path: '/admin',
        component: DashboardComponent
    },
    {
        path: '/admin/productos',
        component: AdminProductosComponent
    },
    {
        path: '/reset-password',
        name: 'reset-password',
        component: ForgotPasswordComponent,
        meta: {
            auth: false
        }
    },
    {
        path: '/reset-password/:token',
        name: 'reset-password-form',
        component: ResetPasswordFormComponent,
        meta: {
            auth: false
        }
    }



];