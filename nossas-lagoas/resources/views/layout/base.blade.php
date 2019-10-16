<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="csrf-token" content = "{{csrf_token()}}">
        <title>Cadastro de Lagoas</title>
    </head>
    <body>
        @hasSection('tela')
            @yield('tela')
        @endif
    </body>
</html>