<?php
include "header.php";
?>

<section>

    <div class="body">

        <h1>Estructura de control Do While</h1>

        <?php
        require "form.php";
        include "../model/persona.php";

        if($_SERVER["REQUEST_METHOD"] == "POST") {


            $usuario = new persona($_POST['nombre'], $_POST['edad'], $_POST['fechanacimiento']);
            $edad = $usuario->calculaedad($_POST['fechanacimiento']);
            echo $nombre = $usuario->getnombre(), " tiene ".$edad, " años", "<br/>";

            echo "<h3>CUENTA ATRAS DESDE EL VALOR DE TU EDAD</h3>","<br/>";
            do {
                echo "$edad...\n";
                $edad--;
            } while ($edad >= 0);

            echo "¡BOOOOOOM!\n";
        }


        ?>


    </div>



</section>

<?php include "footer.php";
