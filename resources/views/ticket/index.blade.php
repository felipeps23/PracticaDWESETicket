<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Ticket Index</title>
        <link href="https://informatica.ieszaidinvergeles.org:9059/laraveles/secondApplication/public/assets/dist/css/style.css" rel="stylesheet">
    </head>
    <body>
    <section>
        <h1>Ticket Index</h1>
        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                        <th>#Id</th>
                        <th>Name</th>
                        <th>Show</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
                <tbody>
                    @foreach ($tickets as $ticket)
                    <tr>
                        <td>{{ $ticket['id'] }}</td>
                        <td>{{ $ticket['name'] }}</td>
                        <td><a class="boton_personalizado2" href="{{ url('ticket/' . $ticket['id']) }}">Show Ticket</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <script src="{{ url('js/script.js?rand=' . uniqid ()) }}"></script>
    </section>
    </body>
</html>

