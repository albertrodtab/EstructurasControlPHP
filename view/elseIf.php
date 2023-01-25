<?php
include "header.php";
?>

<section>

    <div class="body">

        <h1>Estructura de control Else If</h1>

        <?php

        include "../model/persona.php";
        require "form.php";
        if($_SERVER["REQUEST_METHOD"] == "POST") {


            $usuario = new persona($_POST['nombre'], $_POST['edad'], $_POST['fechanacimiento']);
            $edad = $usuario->calculaedad($_POST['fechanacimiento']);

            echo "<h3>EN QUE GRUPO DE EDAD SE INCLUYE</h3>","<br/>";
            if ($edad < 18) {
                echo $nombre = $usuario->getnombre(), " es menor de edad tiene ".$edad, " años", "<br/>";
                echo $nombre = $usuario->getnombre(), " se incluye en el grupo de edad de jovenes.", "<br/>";
            } else if ($edad >= 18 && $edad <= 65){
                echo $nombre = $usuario->getnombre(), " es mayor de edad tiene ".$edad, " años", "<br/>";
                echo $nombre = $usuario->getnombre(), " se incluye en el grupo de edad de adultos.", "<br/>";
            } else {
                echo $nombre = $usuario->getnombre(), " es mayor de edad tiene ".$edad, " años", "<br/>";
                echo $nombre = $usuario->getnombre(), " se incluye en el grupo de edad de ancianos.", "<br/>";

            }
        }

        ?>


    </div>



</section>

<?php include "footer.php";
