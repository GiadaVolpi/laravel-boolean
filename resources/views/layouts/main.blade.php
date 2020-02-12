{{-- struttura base del BODY --}}
<!DOCTYPE html>
<html lang="it" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Boolean Careers</title>
        <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    </head>
    <body>
        @include("layouts.menu")
        @yield ("content")
    </body>
</html>
