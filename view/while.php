<?php
include "header.php";
?>

<section>

    <div class="body">

        <h1>Estructura de control While</h1>

        <?php

        include "../model/persona.php";
        include "../controller/link.php";
        require "form.php";

        if($_SERVER["REQUEST_METHOD"] == "POST") {

            $usuario = new persona($_POST['nombre'], $_POST['edad'], $_POST['fechanacimiento']);

            $edad = $usuario->calculaedad($_POST['fechanacimiento']);

            echo "<h3>¿PUEDES ACCEDER A ESTA PAGÍNA?</h3>", "<br/>";

            if ($edad < 18) {
                $edadinicial = $edad;

                while ($edadinicial < 18) {
                    $edadinicial++;
                    if($edadinicial =18){
                        $añosfaltan = $edadinicial - $edad;
                        echo "Eres demasiado joven. Vuelve a intentarlo dentro de " .$añosfaltan, " años.";
                    }

                }
                } else{
                echo "¡Felicidades! Tienes 18 años o más. puedes acceder a esta página", "<br/>";
                $link = new link('http://www.marca.com');
                echo $link->display();
                }

        }
        ?>


    </div>



</section>

<?php include "footer.php";
