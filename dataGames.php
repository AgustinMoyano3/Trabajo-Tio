<?php
require_once("libs/games.php");

$id = $_GET["id"];

foreach ($games as $nombre => $juego) {

    if ($nombre == $id) {
        $i = 0;
        foreach ($juego as $dato) {

            if ($i == 0) {
                $juegoNombre = $dato;
            } else if ($i == 1) {
                $anio = $dato;
            } else if ($i == 2) {
                $dev = $dato;
            } else if ($i == 3) {
                $foto = $dato;
            }
            else if ($i == 4) {
                $info = $dato;
            }
            else if ($i == 5) {
                $compra = $dato;
            }
            else if ($i == 6) {
                $trailer = $dato;
            }
            $i++;
        }
    }
}


echo('<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">

    <title>'.$juegoNombre.'</title>

</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark justify-content-center">
        <img src="images/EVO_logo.png" class="logo">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.html"><button type="button" class="btn btn-primary">Home</button></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="juegos.html"><button type="button" class="btn btn-primary">Juegos</button></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="administrador.html"><button type="button" class="btn btn-primary">Fechas de torneos</button></a>
          </li>
        </ul>
      </nav>
    <div class="main">
        <div id="left">

            <img src="'.$foto.'" class="imgPort">

        </div>
        <div id="right">

            <h2>'.$juegoNombre.'</h2><br>
            <div>
                <h3>A??o de lanzamiento</h3>
                <h3>'.$anio.'</h3><br>
                <h4>Desarrolladora<br>'.$dev.'</h4>
                
            </div>
            <button type="button" class="btn btn-primary"><a href="'.$compra.'" class="buy">Comprar</a></button>
        </div>
    </div>
    <div class="main">
        <div id="left">
    
        '.$trailer.'
        

        </div>
        <div id="right">

        <h4 id="black">Informacion del juego:<br>'.$info.'</h4>
        </div>

    </div>


</body>

</html>');




        


