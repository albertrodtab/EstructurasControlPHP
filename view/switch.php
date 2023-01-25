<?php
include "header.php";
?>

<section>

    <div class="body">

        <h1>Estructura de control Switch</h1>

        <?php
        include "../model/persona.php";
        require "form.php";

        if($_SERVER["REQUEST_METHOD"] == "POST") {

            $usuario = new persona($_POST['nombre'], $_POST['edad'], $_POST['fechanacimiento']);

            $edad = $usuario->calculaedad($_POST['fechanacimiento']);

            echo "<h3>EN QUE GRUPO DE EDAD SE INCLUYE</h3>", "<br/>";

            switch ($edad) {
                case $edad < 18:
                    echo $_POST['nombre'], " eres menor de edad";
                    break;
                case $edad >= 18 && $edad <= 65:
                    echo $_POST['nombre'], " eres mayor de edad";
                    break;
                case $edad > 65:
                    echo $_POST['nombre'], " eres un adulto mayor";
                    break;
            }
        }
        ?>


    </div>



</section>

<?php include "footer.php";
