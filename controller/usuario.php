<?php

class usuario
{
    public $alias;              //Nombre de usuario

    public $contrasena;         //Contrasena del usuario



//Constructor de la clase
    public function __construct($alias, $password){
        $this->alias = $alias;
        $this->contrasena = $password;

    }

    public function comprobar($usuario){
        // Crear una lista de usuarios y contraseñas válidos
        $users = array(
            'alias' => 'root',
            'contraseña' => 'password'
        );

        // Comprobar si el usuario ha enviado el formulario de inicio de sesión
        if (isset($_POST['submit'])) {
            // Obtener los valores del formulario
            $alias = $_POST['alias'];
            $contraseña = $_POST['password'];

            // Comprobar si el nombre de usuario y la contraseña son válidos
            if ($users['alias'] == $alias && $users['contraseña'] == $contraseña) {
/*                // Iniciar sesión
                $_SESSION['username'] = $alias;*/
                $sesion = new Sesion();
                $sesion->set('alias',($_POST['alias']));
                header('location: controlAcceso.php');
            } else {
                // Si no son válidos, mostrar un mensaje de error
                echo 'Nombre de usuario o contraseña incorrectos.';
            }
        }
    }

}
?>


