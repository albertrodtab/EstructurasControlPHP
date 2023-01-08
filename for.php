<?php
include "header.php";
?>

<section>

    <div class="body">

        <h1>Estructura de control For</h1>

        <?php
        require "form.php";
        include "model/Persona.php";

        if($_SERVER["REQUEST_METHOD"] == "POST") {


            $usuario = new persona($_POST['nombre'], $_POST['edad'], $_POST['fechanacimiento']);
            $edad = $usuario->calculaedad($_POST['fechanacimiento']);
            echo $nombre = $usuario->getnombre(), " tiene ".$edad, " años", "<br/>";

            echo "<h3>CUENTA ATRAS DESDE EL VALOR DE TU EDAD</h3>";

        // Bucle for para realizar la cuenta atrás
        for ($i = $edad; $i >= 0; $i--) {
            // Mostrar el valor actual de la cuenta atrás
            echo "$i...\n";
        }

        echo "¡BOOOOOOM!\n";
        }
        ?>

    </div>



</section>

<?php include "footer.php";