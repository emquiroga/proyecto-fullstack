<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <p>Ha llegado un mail de <b>{{ $msg['nombre'] }}</b>.</p>
    <p>Email:   {{ $msg['email'] }}</p>
    <p style="font-weight: bold;">Mensaje</p>
    <p>{{ $msg['mensaje'] }}</p>
</body>
</html>
