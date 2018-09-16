<html>
    <title>Lista de @yield('title') </title>
</head>
<body>
    
    <center>
    <table border=1>
        <tr>
            <th colspan=3><center>@yield('table')</center></th>
        </tr>
        <tr>
        <th><center> @yield('No')</center></th>
        <th><center>@yield('Nombre')</center></th>
        <th><center>@yield('posicion')</center></th>
        </tr>

        @for($i=0;$i<count($jugador);$i++)
        <tr>
        <td><b>{{$i+1}} </b></td>
        <td>{{$jugador[$i]}}</td>
        <td>{{$Posicion[$i]}} </td>
        </tr>
        @endfor

        <tr>
            <th colspan=3><center>@yield('footer')</center></th>
        </tr>
    </table>
    </center>
    
</body>
</html>