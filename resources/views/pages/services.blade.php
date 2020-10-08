<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title }}</title>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        {!! $page['content'] !!}
        <button type="button" class="btn btn-primary">Primary</button>
        <i style="font-size: 40px" class="icono-arg-aviacion"></i>
        <i style="font-size: 40px" class="icono-arg-malvinas-argentinas"></i>
        <i style="font-size: 40px" class="icono-arg-mapa-argentina"></i>
    </body>
</html>
