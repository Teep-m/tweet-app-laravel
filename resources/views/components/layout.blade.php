<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" async defer></script>
    <title>{{ $tile ?? 'つぶやきアプリ' }}</title>
    @stack('css')
</head>
<body>
    {{ $slot }}
</body>
</html>