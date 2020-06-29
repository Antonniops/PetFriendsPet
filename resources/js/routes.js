//Rutas
import DashboardComponent from './components/admin/dashboard/DashboardComponent.vue';
import AdminProductosComponent from './components/admin/productos/ProductosComponent.vue';


//Lazy Loading solo se cargara el componente cuando entre a la ruta
function lazyLoad(view) {
    return () =>
        import (`./components/${view}.vue`)
}

function guardMyRoute(to, from, next) {

    if (localStorage.getItem('access_token'))
        next();
    else
        next('/admin/acceso');
}



export const routes = [{
        path: '/',
        component: lazyLoad('HomeComponent'),
        name: 'home'
    },

    {
        path: '/perros',
        component: lazyLoad('animales/perros/PerrosComponent'),
        name: 'perros'
    },

    {
        path: '/gatos',
        component: lazyLoad('animales/gatos/GatosComponent'),
        name: 'gatos'
    },
    {
        path: '/otros',
        component: lazyLoad('animales/otros/OtrosComponent'),
        name: 'otros',

    },
    {
        path: '/peluqueria',
        component: lazyLoad('peluqueria/PeluqueriaComponent'),
        name: 'peluqueria',

    },
    {
        path: '/productos/:id',
        component: lazyLoad('shared/producto/ProductoComponent'),
        props: true
    },
    {
        path: '/carrito',
        component: lazyLoad('carrito/CarritoComponent'),
        props: true
    },

    {
        path: '/categoria/:animal/:producto',
        component: lazyLoad('shared/categoria/CategoriaComponent'),
        props: true
    },

    {
        path: '/auth-login',
        component: lazyLoad('auth/login/LoginComponent'),
        name: 'login',
    },

    {
        path: '/auth-register',
        component: lazyLoad('auth/register/RegisterComponent'),
        name: 'register',
    },
    {
        path: '/sobre-nosotros',
        component: lazyLoad('sobrenosotros/SobrenosotrosComponent'),
        name: 'sobre-nosotros',
    },
    {
        path: '/contacto',
        component: lazyLoad('contacto/ContactoComponent')
    },


    // {
    //     path: '/admin',
    //     component: lazyLoad('admin/dashboard/DashboardComponent'),
    // },
    {
        path: '/admin/productos',
        component: lazyLoad('admin/productos/ProductosComponent'),
        name: 'dashboard-component',

    },


    {
        path: '/admin/productos/formulario',
        component: lazyLoad('admin/productform/ProductFormComponent'),
        name: 'admin-product-form',
    },
    {
        path: '/admin/productos/formulario/actualizar/:id',
        component: lazyLoad('admin/productformupdate/ProductFormUpdateComponent'),
        name: 'admin-product-form-update',
        props: true
    },


    {
        path: '/reset-password',
        name: 'reset-password',
        component: lazyLoad('auth/ResetPassword/forgot_password/ForgotPasswordComponent'),
        meta: {
            auth: false
        }
    },
    {
        path: '/reset-password/:token',
        name: 'reset-password-form',
        component: lazyLoad('auth/ResetPassword/reset_password/ResetPasswordFormComponent'),
        meta: {
            auth: false
        }
    },
    {
        path: '/pago/confirmacion',
        component: lazyLoad('shared/PaymentSuccessComponent')
    },



];