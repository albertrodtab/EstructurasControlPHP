<?php
include "header.php";
?>

<section>

    <div class="body">

        <h1>Estructura de control For Each</h1>

        <?php
        require "form.php";
        include "../model/persona.php";

        if($_SERVER["REQUEST_METHOD"] == "POST") {

            $personas = array(
                new Persona($_POST['nombre'], $_POST['edad'], $_POST['fechanacimiento']),
                new Persona("Pepe", "56", "09-13-1975")
            );


            echo "<h3>GUARDAR LOS DATOS DE UN FORMULARIO EN UN ARRAY Y MOSTRARLOS.</h3>";

            foreach ($personas as $persona) {
                echo "Nombre: " . $persona->nombre . ", \n";
                echo "Edad: " . $persona->edad . ", \n";
                echo "Fecha de Nacimiento: " . $persona->fechanacimiento. "\n", "<br/>";
            }
        }
        ?>


    </div>



</section>

<?php include "footer.php";
