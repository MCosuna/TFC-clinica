<!-- <!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ClinicaMacia</title>
        <link rel="icon" type="image/png" href="./resources/js/components/img/favicon.png">
        <link href="{{asset('css/app.css')}}" rel="stylesheet"> Añadimos el css generado con webpack -->
    <!-- </head>
    <body>
            <div id="app" class="content"> -->
            <!--La equita id debe ser app, como hemos visto en app.js-->
                <!-- <example-component></example-component> -->
                <!-- <inicio></inicio> -->
                <!--Añadimos nuestro componente vuejs-->
            <!-- </div>
        <script src="{{asset('js/app.js')}}"></script> -->
         <!-- Añadimos el js generado con webpack, donde se encuentra nuestro componente vuejs -->
    <!-- </body>
</html>        -->
<!-- ---------------------Este es un codigo de prueba vue router -------------------------- -->
<!doctype html>
<html lang="{{ str_replace( '_', '-', app()->getLocale()) }}">
    <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- con esto utilizamos el metodo post para enviar datos desde un formulario -->
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <style type="text/css"> BODY{ font-family: Roboto !important; } </style>
            <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900 |Material+Icons" rel="stylesheet">
            <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
            <link href="{{asset('css/app.css')}}" rel="stylesheet">
    </head>
    <body > 
        <div id="app"></div>
        <!-- script de prueba -->
    <script>
        window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token(),
        ]); ?>

        </script>
        <script src="{{asset('js/app.js')}}"></script>
        </body>
</html>
