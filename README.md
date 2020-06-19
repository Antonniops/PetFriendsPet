
<p  align="center"><img  src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg"  width="400"></p>

  

<p  align="center">

<a  href="https://travis-ci.org/laravel/framework"><img  src="https://travis-ci.org/laravel/framework.svg"  alt="Build Status"></a>

<a  href="https://packagist.org/packages/laravel/framework"><img  src="https://poser.pugx.org/laravel/framework/d/total.svg"  alt="Total Downloads"></a>

<a  href="https://packagist.org/packages/laravel/framework"><img  src="https://poser.pugx.org/laravel/framework/v/stable.svg"  alt="Latest Stable Version"></a>

<a  href="https://packagist.org/packages/laravel/framework"><img  src="https://poser.pugx.org/laravel/framework/license.svg"  alt="License"></a>

</p>

  

## About PetFriends

  

PetFriends is an online store where you can buy many animal products that will interest you.

Good prices, good service, and the most important, a trustfully shop!.

  

-  [Simple, fast routing engine](https://laravel.com/docs/routing).

-  [Powerful dependency injection container](https://laravel.com/docs/container).

- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.

- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).

- Database agnostic [schema migrations](https://laravel.com/docs/migrations).

-  [Robust background job processing](https://laravel.com/docs/queues).

-  [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

  

Laravel is accessible, powerful, and provides tools required for large, robust applications.

  

## Learning Laravel

  

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

  

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

  

## Instalación de PetFriends

  

Aquí podrá encontrar la documentación necesaria para la instalación de la tienda.

  

**Requisitos:**

-  Servidor web: Preferiblemente Apache

-  PHP 7 o superior

-  Laravel

-  Node.js

-  Vue.js

**Instalación:**

En primer lugar descargue el directorio de archivos y cópielo en su servidor web.
En el caso de Apache en C://xammp/htdocs/

Configure un host virtual para su correcto funcionamiento:

-  **[Crear host virtual en Apache](https://desarrolloweb.com/articulos/configurar-virtual-hosts-apache-windows.html)**

Establezca la siguiente configuración: 

C:\Windows\System32\drivers\etc\hosts
Agregue la siguiente línea: 
127.0.0.1	petfriendspet.com


En el archivo C:\xampp\apache\conf\extra\httpd-vhosts.conf introduzca la siguiente info:

    NameVirtualHost *
    <VirtualHost *>
	    DocumentRoot "C:\xampp\htdocs"
	    ServerName localhost
	</VirtualHost>
	<VirtualHost *>
		DocumentRoot "C:\xampp\htdocs\Proyecto_petfriends\public"
		ServerName petfriendspet.com
		<Directory "c:/xampp/htdocs/Proyecto_petfriends">
		Require all granted
		</Directory>
	</VirtualHost>


-  La base de datos y el archivo .env se enviarán por privado


  

## Contributing

  

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

  

## Code of Conduct

  

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

  

## Security Vulnerabilities

  

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

  

## License

  

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
