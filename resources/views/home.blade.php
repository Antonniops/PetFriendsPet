<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!--Estilos css-->
        <link rel="stylesheet" href="{{ asset('css/dist/css/bootstrap.css') }}">        
        <link rel="stylesheet" href="{{asset('css/estilos_propios/style.css') }}">

        <!--Fuente de la pagina-->
        <link href="https://fonts.googleapis.com/css?family=Old+Standard+TT&display=swap" rel="stylesheet">

        

    </head>
    <body>
        <div id="admin">
            
            <dashboard-component></dashboard-component>
            
        </div>



    
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!--Font Awesome Icons-->
        <script src="https://kit.fontawesome.com/e7022998d8.js " crossorigin="anonymous "></script>

       
    </body>
</html>
