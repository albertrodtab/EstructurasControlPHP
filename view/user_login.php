<?php require "header2.php" ?>

<!--Pagina que muestra un formulario para iniciar sesion-->

<div id="contenedor">
    <header>
        <h1>Login de usuario</h1>
    </header>
    <body>
    <p>
        Para acceder a la pagina debes logearte primero.<br>
        Como se trata de un entorno de pruebas el usuario y contraseña que debes introducir es:<br>
        - Usuario: root<br>
        - Contraseña: password<br>
    </p>
    <form action="" method="post">
        <div class="formulario">
            <form action="" method="post">
                <div class="form">
                    <input type="text" name="alias" placeholder="Alias" class="form-input"><br/>
                    <input type="password" name="password" placeholder="Contraseña" class="form-input"><br/>
                    <input type='submit' name='submit' value='Iniciar sesión' class="form-boton">
                </div>

                <?php
                include "../controller/sesion.php";
                include "../controller/usuario.php";

                //Con esto evito que me lance un warning cuando el formulario aún no tiene datos.
                if($_SERVER["REQUEST_METHOD"] == "POST") {

                    $user = new usuario($_POST['alias'], $_POST['password']);

                    $user->comprobar($user);
                }

                ?>

            </form>
        </div>
    </form>
    </body>
</div>


<?php require "footer.php" ?>
</html>

