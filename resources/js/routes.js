//Rutas
import DashboardComponent from './components/admin/dashboard/DashboardComponent.vue';
import AdminProductosComponent from './components/admin/productos/ProductosComponent.vue';


//Lazy Loading solo se cargara el componente cuando entre a la ruta
function lazyLoad(view) {
    return () =>
        import (`./components/${view}.vue`)
}



export const routes = [
    
    //Rutas para el area de clientes
    {
        path: '/',
        component: lazyLoad('ClientTemplateComponent'),
        name: 'client',
        children: [
            {
                path: 'home',
                component: lazyLoad('HomeComponent'),
                name: 'home'
            },
            {
                path: 'perros',
                component: lazyLoad('animales/perros/PerrosComponent'),
                name: 'perros'
            },
            {
                path: 'gatos',
                component: lazyLoad('animales/gatos/GatosComponent'),
                name: 'gatos'
            },
            {
                path: 'otros',
                component: lazyLoad('animales/otros/OtrosComponent'),
                name: 'otros',
        
            },
            {
                path: 'peluqueria',
                component: lazyLoad('peluqueria/PeluqueriaComponent'),
                name: 'peluqueria',
        
            },
            {
                path: 'productos/:id',
                component: lazyLoad('shared/producto/ProductoComponent'),
                props: true
            },
            {
                path: 'carrito',
                component: lazyLoad('carrito/CarritoComponent'),
                props: true
            },
        
            {
                path: 'categoria/:animal/:producto',
                component: lazyLoad('shared/categoria/CategoriaComponent'),
                props: true
            },
        
            {
                path: 'auth-login',
                component: lazyLoad('auth/login/LoginComponent'),
                name: 'login',
            },
        
            {
                path: 'auth-register',
                component: lazyLoad('auth/register/RegisterComponent'),
                name: 'register',
            },
            {
                path: 'sobre-nosotros',
                component: lazyLoad('sobrenosotros/SobrenosotrosComponent'),
                name: 'sobre-nosotros',
            },
            {
                path: 'contacto',
                component: lazyLoad('contacto/ContactoComponent')
            },

            {
                path: 'reset-password',
                name: 'reset-password',
                component: lazyLoad('auth/ResetPassword/forgot_password/ForgotPasswordComponent'),
                meta: {
                    auth: false
                }
            },
            {
                path: 'reset-password/:token',
                name: 'reset-password-form',
                component: lazyLoad('auth/ResetPassword/reset_password/ResetPasswordFormComponent'),
                meta: {
                    auth: false
                }
            },
            {
                path: 'pago/:token/confirmacion',
                component: lazyLoad('shared/PaymentSuccessComponent')
            },
            
            

        ],
        
    },


    //Rutas para el área de administración
     {
         path: '/admin',
         component: lazyLoad('AdminTemplateComponent'),
         meta: {
            requiresAuth: true,
        },

         children: [
             {
                path: 'dashboard',
                component: lazyLoad('admin/dashboard/DashboardComponent'),
                name: 'dashboard-component',        
            },
            {
                path: 'productos',
                component: lazyLoad('admin/productos/ProductosComponent'),
                name: 'productos-component'
            },
            {
                path: 'pedidos',
                component: lazyLoad('admin/pedidos/PedidosComponent'),
                name: 'pedidos'
        
            },
            {
                path: 'pedidos/detalles/:id',
                component: lazyLoad('admin/pedidosdetalles/PedidosDetallesComponent'),
                name: 'pedidos-detalles',
                props: true
        
            },
            {
                path: 'productos/formulario',
                component: lazyLoad('admin/productform/ProductFormComponent'),
                name: 'admin-product-form'
            },
            {
                path: 'productos/formulario/actualizar/:id',
                component: lazyLoad('admin/productformupdate/ProductFormUpdateComponent'),
                name: 'admin-product-form-update',
                props: true
            },
            {
                path: '*',
                component: lazyLoad('admin/dashboard/DashboardComponent')
            },    
         ]
    },
    {
        path: '/admin-login',
        component: lazyLoad('admin/login/LoginComponent'),
        name: 'admin-login'
    },
    {
        path: '*',
        redirect: 'home'
    }
    
];