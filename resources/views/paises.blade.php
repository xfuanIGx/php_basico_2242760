<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" />
    <title>Document</title>
</head>
<body>
    <center><h1>Hola mundo</h1></center>
    <hr>
    <br>
    <table class="table table-dark">
        <tr>
            <th class="text-danger bg-warning">Nombre</th>
            <th class="text-danger bg-warning">Capital</th>
            <th class="text-danger bg-warning">Moneda</th>
            <th class="text-danger bg-warning">Poblacion</th>
        </tr>
        @foreach ($naciones as $nombre => $nacion)
            <tr>
                <td class="text-break bg-primary" >{{  $nombre   }}</td>
                <td class="text-break bg-success">{{  $nacion["Capital"]   }}</td>
                <td class="text-break bg-danger">{{  $nacion["Moneda"]   }}</td>
                <td class="text-break bg-info">{{  $nacion["Poblacion"]   }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
