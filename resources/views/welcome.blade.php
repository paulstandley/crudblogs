<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Crudblogs') }}</title>
        <link rel="stylesheet" type="text/css" href="css/app.css">
    </head>
    <body>
        <div id="root"></div>
        <script src="js/app.js"></script>
    </body>
</html>
