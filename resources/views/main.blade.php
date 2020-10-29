<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Main Page</title>
        <style type="text/css">
            body{
            background: -webkit-linear-gradient(left, #25c481, #25b7c4);
            background: linear-gradient(to right, #25c481, #25b7c4);
            font-family: 'Roboto', sans-serif;
            }
            .boton_personalizado{
            position:absolute;
            top:30%;
            margin-left: 50%;
            text-decoration: none;
            padding: 10px;
            font-weight: 600;
            font-size: 20px;
            color: white;
            background-color: black;
            border-radius: 6px;
            }
        </style>
    </head>
    <body>
        <a class="boton_personalizado" href="{{ url('ticket/index') }}">Index</a>
    </body>
</html>