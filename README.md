
<p  align="center"><img  src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg"  width="400"></p>

  



<a  href="https://packagist.org/packages/laravel/framework"><img  src="https://poser.pugx.org/laravel/framework/license.svg"  alt="License"></a>

</p>

  

## Sobre PetFriends

  

PetFriends es una tienda online que le ofrecerá productos de calidad para sus mascotas y servicios para el cuidado de ellas.


 - Proceso de compra sencillo
 - Sin necesidad de registro
 - Pida cita para la peluquería canina de forma online
 - Reciba los productos en su casa de formá rápida



  

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
Ejecuta en la consola de comandos para instalar las dependencias:
	-npm install
	-composer require

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
