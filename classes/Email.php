<?php 

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email {

    public $email;
    public $nombre;
    public $token;

    public function __construct($email, $nombre, $token)
    {
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }
    
    public function enviarConfirmacion() {
        // Crear el objeto de mail
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = '36af81050fef3f';
        $mail->Password = '312345693a37c7';

        $mail->setFrom('accounts@barbershop.com');
        $mail->addAddress('accounts@barbershop.com', 'Barbershop.com');
        $mail->Subject = 'Verify your account';

        // Set HTML
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';

        $contenido = "<html>";
        $contenido .= "<p><strong>Hi " . $this->nombre . "!</p></strong>";
        $contenido .= "<p> You have created your account on Barbershop. </p>";
        $contenido .= "<p> Please verify your account by clicking on the next link: </p>";
        $contenido .= "<p><a href='http://localhost:3000/validate-account?token=" . $this->token . "'>Click here</a></p>";
        $contenido .= "<p>If you did not send this request, please ignore this email.</p>";
        $contenido .= "</html>";

        $mail->Body = $contenido;

        // Enviar email
        $mail->send();
    }

    public function enviarInstrucciones() {
        // Crear el objeto de email
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = '36af81050fef3f';
        $mail->Password = '312345693a37c7';

        $mail->setFrom('accounts@barbershop.com');
        $mail->addAddress('accounts@barbershop.com', 'Barbershop.com');
        $mail->Subject = 'Reset your password';

        // Set HTML
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';
         

        $contenido = "<html>";
        $contenido .= "<p><strong>Hi " . $this->nombre . "!</p></strong>";
        $contenido .= "<p> You have requested to reset your password. </p>";
        $contenido .= "<p> Click on the following link to do so: </p>";
        $contenido .= "<p><a href='http://localhost:3000/recover?token=" . $this->token . "'>Reset password</a></p>";
        $contenido .= "<p>If you did not send this request, please ignore this email.</p>";
        $contenido .= "</html>";

        $mail->Body = $contenido;

        // Enviar email
        $mail->send();
    }

}