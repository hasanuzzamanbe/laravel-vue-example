<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/public.css')}}">
    </head>
    <body>
        <div id="myAdminPanel" class="flex-center position-ref full-height">
        </div>
        <script src="{{asset('js/boot.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>
    </body>
</html>
