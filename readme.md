# Adivinar un número
Este es un proyecto de PHP que adivina un número

El usuario piensa un número de un intervalo previamente establecido.

Para clonártelo escribe en el terminal
```shell
git clone https://github.com/IvanBelio/adivinaNumero.git
```
## Página jugar.php
```php
$opcion = $_POST['submit'] ?? null;
switch ($opcion){
```
Con esto, obtenemos el valor del botón de envío del formulario.
Luego utilizamos un switch para declarar los casos que se nos pueden presentar en este ejercicio
```php
case "Reiniciar":
case "Empezar":
    // Esto es el Input
    // Rango menor
    $min=0;
    // Número de intentos que le pasamos
    $intentos=$_POST['intentos'];
    $max= 2** $intentos;
    // Esto es el procesamiento
    $numero_propuesto= ($min+$max)/2;
    // Número de la jugada
    $jugada= 1;
    break;
```
Si el usuario elige "Reiniciar" o "Empezar", se establece el rango inicial ($min, $max), el número de intentos ($intentos) y el númeor propuesto por la aplicación ($numero_propuesto) y se inicia el conteo de jugadas ($jugada).
```php
    case "Jugar":
        //Obtener los valores de variables
        $min=$_POST['min'];
        $max=$_POST['max'];
        //Número de intentos que le pasamos
        $intentos=$_POST['intentos'];
        //Número de la jugada
        $jugada= $_POST['jugada'];
        //Número que ha salido en el caso de empezar y, este parámetro lo tenemos guardado en un input tipo hidden
        $numero_propuesto = $_POST['numero_propuesto'];

        //Leer resultado
        $resultado = $_POST['resultado'];

        //Actualizar mínimo o máximo en función del resultado
        switch ($resultado){
            case "mayor":
                $min = $numero_propuesto;
                break;
            case "menor":
                $max = $numero_propuesto;
                break;
            case "igual":
                // TO DO falta implementar esta situación que será fin de juego
                //Enviamos la variable con texto
                header('Location:fin.php?msj=Has acertado');
                exit();
        }
        //PROCEDIMIENTO_____Actualizar las variables $numero_propuesta $jugada
        $jugada++;
        if ($jugada>$intentos){
            header('Location:fin.php?msj=Te has quedado sin intentos');
            exit();
        }

        $numero_propuesto = ($min+$max)/2;
        break;
```
En el caso de "Jugar", se actualizan las variables en función de lo que decida el usuario y se realiza el procesamiento  para determinar el siguiente intento.
- Se obtienen los valores relevantes del formulario ($min, $max, $intentos, $jugada, $numero_propuesto y $resultado).
- Se actualizan los valores de $min y $max según la respuesta del usuario ($resultado).
- Se verifica si el juego ha terminado (el númeor ha sido adivinado o se han agotado los intentos), y se redirige a una página de fin ha acertado el número.
- Se incremetna la variable $jugada y se calcula el prócimo número propuesto.

## Página fin.php
En está página nos encargamos de mostrar un mensaje en una página HTML después de ser redirecionamos esde otra página mediante la varianete "GET".
```php
<?php

$mensaje= $_GET['msj'];
if (!isset($_GET['msj'])){
    header("Location:index.php");
    exit();
}
?>
```
1. Se recupera el valor de la variable GET usanod "$_GET['msj']" y se alamacena en al variabel "$mensaje".
2. Se verifica si la variable GET está establecida utilizando "isset()". Si no está establecida se redirige al usuario a "index.php" mediante "header("Location:index.php")".
3. Si la variabel GET está establecisa, se muestra una página HTML que cobntiene un encabezado "Fin del juego" y un segundo encabezado que muestra el contenido de la variable "$mensaje" de forma abreviada.