<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Ticket Show</title>
        <link href="https://informatica.ieszaidinvergeles.org:9059/laraveles/secondApplication/public/assets/dist/css/style.css" rel="stylesheet">
    </head>
    <body>
    <section>
            <h1>Show Ticket: {{ $name }}</h1>
            <div class="tbl-header">
                <table cellpadding="0" cellspacing="0" border="0">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Date</th>
                        <th>Time</th>
                    </tr>
                    </thead>
                </table>
            </div>
            <div class="tbl-content">
                <table cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                    <tr>
                        @csrf
                        <td>{{ $id }}</td>
                        <td>{{ $name }}</td>
                        <td>{{ $price }}</td>
                        <td>{{ $date }}</td>
                        <td>{{ $time }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <a class="boton_personalizado6" href="{{url('ticket')}}">Index</a>
            
            <script src="{{ url('js/script.js?rand=' . uniqid ()) }}"></script>
        </section>
    </body>
</html>