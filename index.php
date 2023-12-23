<?php
?>

<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

    <meta name="viewport"
    <title>Adivina numero</title>
    <link rel="stylesheet" href="estilo.css" type="text/css"/>
</head>
<body>


<fieldset style="width: 50%;float:left;margin-left: 20%; background: bisque">
    <legend><h1>Juego adivina numero</h1></legend>
    <h2> Selecciona un intervalo del men&uacute de abajo</h2>
    <fieldset>
        <legend>Esteblece interfalo</legend>
        <form action="jugar.php" method="POST">
            <input type="radio" name="intentos" value=10 checked> 1-1.024(2<sup>10</sup>). 10 intentos<br/>
            <input type="radio" name="intentos" value=15> 1-32.268(2<sup>15</sup>). 15 intentos<br/>
            <input type="radio" name="intentos" value=20> 1-1.048.536(2<sup>20</sup>). 20 intentos<br/>
            <input type="submit" value="Empezar" name="submit">
        </form>
    </fieldset>
    <br/>
    <h2> Piensa un numero de ese intervalo</h2>
    <h2> La aplicación lo acertara en el numero de intentos establecidos segun el intervalo</h2>
    <hr/>

    <h2> Cada vez que la aplicacion te especifique un numero deberas de indicar</h2>
    <ul>
        <ol>Si el numero buscado es mayor</ol>
        <ol>Si el numero buscado es menor</ol>
        <ol>Si has acertado el numero</ol>
    </ul>


</fieldset>
</body>
</html>