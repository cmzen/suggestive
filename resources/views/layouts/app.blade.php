<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $appName }}</title>

        <link href="/css/app.css" rel="stylesheet" type="text/css">

        <script>
        var Suggestive = {
            appName: "{{ $appName }}",
            userId: "{{ Auth::user()->id }}",
            isAdmin: {{ Auth::user()->isAdmin() ? 'true' : 'false' }}
        };
        </script>
    </head>
    <body>
        @yield('body')
    </body>
</html>
