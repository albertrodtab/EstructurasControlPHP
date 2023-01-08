<?php
include "header.php";
?>

<section>

    <div class="body">

        <h1>Estructura de control If Else</h1>

        <?php

        include "model/Persona.php";
        include "model/Link.php";
        require "form.php";

//Con esto evito que me lance un warning cuando el formulario aún no tiene datos.
if($_SERVER["REQUEST_METHOD"] == "POST") {


    $usuario = new persona($_POST['nombre'], $_POST['edad'], $_POST['fechanacimiento']);
    $edad = $usuario->getedad();
    echo "La edad introducida es " .$edad, " años.", "<br/>";
    /*            if ($edad >= 18) {
                    echo $nombre = $adulto->getnombre(), " es mayor de edad.";
                    echo "<br/>";
                }*/
    echo "<h3>COMPROBACIÓN DE LA EDAD POR LA FECHA DE NACIMIENTO</h3>","<br/>";
    $edad = $usuario->calculaedad($_POST['fechanacimiento']);
    if ($edad >= 18) {
        echo $nombre = $usuario->getnombre(), " es mayor de edad tiene ".$edad, " años", "<br/>";
        echo $nombre = $usuario->getnombre(), " tiene la edad adecuada para acceder a este sitio.", "<br/>";
        $link = new Link('http://www.marca.com');
        echo $link->display();
    } else {
        echo $nombre = $usuario->getnombre(), " no tiene la edad adecuada para acceder a este sitio.";
    }
}

        ?>

    </div>



</section>

<?php include "footer.php";
