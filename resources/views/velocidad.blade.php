<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Velocidad</title>
</head>


<body background="https://img.freepik.com/vector-gratis/formulas-fisica-dibujadas-mano-pizarra-verde-fondo-ilustracion-vectorial_101002-38.jpg?size=626&ext=jpg">

    <div>
        <img src="https://i.ibb.co/C9Wct1D/sticker.jpg" />
        <p><div style="text-align:center" class="e d">
 <font face="Comic Sans MS,arial,verdana" size=60 color="white" >Jorge Parra GPO</font>
 </div></p>
    
    <center>
        <p><input type="date" id="start" name="trip-start"
       value="2018-07-22"
       min="2018-01-01" max="2018-12-31" align="center"></p>
    </div>
    </center>

    <nav>
    <p><div style="text-align:center" class="e d">
 <font face="Comic Sans MS,arial,verdana" size=60 color="white">Velocidad Aceleracion
    Formula Gral</font>
 </div></p>

    </nav>

    <div>
    <center>
    <form action="{{route('calcular')}}" method="post">
    {{csrf_field()}}
        <div>
            <label><font face="Comic Sans MS,arial,verdana" size=30 color="white">Velocidad</font></label>
            <input type="text" id="vel" name="vel"/>
        </div>
        <div>
            <label><font face="Comic Sans MS,arial,verdana" size=60 color="white">Distancia</font></label>
            <input type="text" id="dis" name="dis"/>
        </div>
        <div>
            <label><font face="Comic Sans MS,arial,verdana" size=60 color="white">Tiempo</font></label>
            <input type="text" id="tim" name="tim"/>
        </div>
        <br><br>
        <div>
            <input type="submit" value="Calcular"/>
        </div>
    </form>
    </center>

    </div>
</body>
</html>