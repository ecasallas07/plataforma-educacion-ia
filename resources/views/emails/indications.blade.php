{{-- resources/views/mail/welcome.blade.php --}}

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a la Plataforma Educativa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8fafc;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header h1 {
            color: #333;
        }
        .content {
            font-size: 16px;
            line-height: 1.5;
            color: #555;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #888;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            font-size: 16px;
            color: #fff;
            background-color: #4CAF50;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Bienvenido a Nuestra Plataforma Educativa</h1>
        </div>
        <div class="content">
            <p>Hola {{ $user->name }},</p>
            <p>Gracias por unirte a nuestra plataforma. Estamos emocionados de tenerte con nosotros. Aquí hay algunas indicaciones para que puedas comenzar:</p>
            <ul>
                <li>1. Completa tu perfil en <a href="{{ url('/profile') }}">tu perfil</a> para personalizar tu experiencia.</li>
                <li>2. Explora nuestros cursos disponibles y elige el que más te interese.</li>
                <li>3. Si tienes alguna duda, no dudes en contactar a nuestro equipo de soporte.</li>
            </ul>
            <p>¡Esperamos que disfrutes de tu tiempo con nosotros!</p>
            <a href="{{ url('/dashboard') }}" class="button">Ir al Dashboard</a>
        </div>
        <div class="footer">
            <p>&copy; {{ date('Y') }} Plataforma Educativa. Todos los derechos reservados.</p>
        </div>
    </div>
</body>
</html>
