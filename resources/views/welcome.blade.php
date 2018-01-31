<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
        <title>LaraBlog: React + Laravel</title>

        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    </head>
    <body>

        <div id="root"></div>

        <!--  Scripts-->
        <script src="{{ mix('js/app.js') }}"></script>
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="/js/materialize.js"></script>
        <script src="/js/init.js"></script>
    </body>
</html>