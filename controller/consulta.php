<?php


use PHPMailer\controller\Phpmailer\PHPMailer;

require 'Phpmailer/Exception.php';
require 'Phpmailer/PHPMailer.php';
require 'Phpmailer/SMTP.php';



class consulta
{
    public $user;              //Nombre de usuario

    public $contrasena;         //Contrasena del usuario
    public $email;              //email del usuario
    public $descripcion;           //email del usuario


//Constructor de la clase
    public function __construct($user, $password, $email, $descripcion)
    {
        $this->user = $user;
        $this->contrasena = $password;
        $this->email = $email;
        $this->descripcion = $descripcion;
    }

    //Método que envía el correo y devuelve un error si no es posible
    public function enviar($consulta)
    {
        // Creando una nueva instancia de PHPMailer
        $mail = new PHPMailer;
        // Indicando el uso de SMTP
        $mail->isSMTP();
        // Habilitando SMTP debugging
        // 0 = apagado (para producción)
        // 1 = mensajes del cliente
        // 2 = mensajes del cliente y servidor
        $mail->SMTPDebug = 0;

        // Agregando compatibilidad con HTML
        $mail->Debugoutput = 'html';

        // Estableciendo el nombre del servidor de email
        $mail->Host = 'smtp-mail.outlook.com';

        // Estableciendo el puerto
        $mail->Port = 587;

        // Estableciendo el sistema de encriptación
        $mail->SMTPSecure = 'tls';

        // Para utilizar la autenticación SMTP
        $mail->SMTPAuth = true;

        // Nombre de usuario para la autenticación SMTP - usar email completo para gmail
        $mail->Username = 'albertrodtab@hotmail.es';
        // Password para la autenticación SMTP
        $mail->Password = 'Leehty59.';

        // Estableciendo como quién se va a enviar el mail
        $mail->setFrom('albertrodtab@hotmail.es', 'El equipo de ArtDeveloper');

        // Estableciendo a quién se va a enviar el mail
        $mail->addAddress($_POST['email'], $_POST['user']);

            $mail->Subject = 'Su consulta ####';
            $mail->isHTML(false);
            $mail->Body = <<<EOT
                Nombre: {$_POST['user']}
                Descripcion: {$_POST['descripcion']}
                EOT;
        // Enviando el mensaje y controlando los errores
        if (!$mail->send()) {
            echo "No se pudo enviar el correo. Intentelo más tarde.";
        } else {
            echo "Gracias por contactarnos.";
        }

        /*// Comprobar si el usuario ha enviado el formulario de contacto
        if (isset($_POST['submit'])) {
            // Obtener los valores del formulario
            $user = $_POST['user'];
            $contraseña = $_POST['password'];
            $email = $_POST['email'];
            $descripcion = $_POST['descripcion'];
            $consultas = array();
            array_push($consultas, $consulta);

            $email_origen = "admin@localhost.com";
            $formato = "html";
            $asunto = "Contacto";
            $mensaje = "Su consulta " . $this->descripcion . "ha sido recibida:" . $this->user . "se ha registrado su consulta en breve nos pondremos
         en contacto con usted.";
            $headers = "";

            $headers = "To: " . $this->user . "<" . $this->email . "> \r \n";
            $headers .= "From: Administrador" . "<" . $email_origen . "> \r \n";
            $headers .= "Return-path: <" . $email_origen . "> \r \n";
            $headers .= "Reply-to: " . $email_origen . "\r \n";
            $headers .= "MIME-Version: 1.0 \r \n";
            if ($formato == "html") {
                $headers .= "Content-Type: text/html; charset = utf-8 \r \n";
            } else {
                $headers .= "Content-Type: text/plain; charset = utf-8 \r \n";
            }
            if (mail($this->email, $asunto, $mensaje, $headers)) {
                echo "Su correo se envió";
            } else {
                echo "Error al enviar correo";
            }
        }*/
    }
}
