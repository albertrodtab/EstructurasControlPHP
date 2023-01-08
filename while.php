<?php
include "header.php";
?>

<section>

    <div class="body">

        <h1>Estructura de control While</h1>

        <?php

        include "model/Persona.php";
        include "model/Link.php";
        require "form.php";

        if($_SERVER["REQUEST_METHOD"] == "POST") {

            $usuario = new persona($_POST['nombre'], $_POST['edad'], $_POST['fechanacimiento']);
        }
        $edad = $usuario->calculaedad($_POST['fechanacimiento']);

        echo "<h3>¿PUEDES ACCEDER A ESTA PAGÍNA?</h3>","<br/>";

        while ($edad < 18) {
            echo "Eres demasiado joven. Vuelve a intentarlo cuando tengas 18 años o más.";

        }

        echo "¡Felicidades! Tienes 18 años o más. puedes acceder a esta página", "<br/>";
        $link = new Link('http://www.marca.com');
        echo $link->display();


        ?>


    </div>



</section>

<?php include "footer.php";
