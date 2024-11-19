<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $mail = new PHPMailer(true);

    try {
        // Configurer SMTP (Mailpit)
        $mail->isSMTP();
        $mail->Host = 'localhost';
        $mail->Port = 1025;
        $mail->SMTPAuth = false;

        // Informations sur l'e-mail
        $mail->setFrom($email, $name);
        $mail->addAddress('homtech@gmail.com');

        // Sujet et contenu de l'e-mail
        $mail->Subject = $subject;
        $mail->Body = "Nom : $name\nEmail : $email\nMessage : $message";

        // Envoi de l'e-mail
        $mail->send();

        // Si l'e-mail est envoyé, définir une variable de session
        $_SESSION['contact_sent'] = true;
        header('Location: index.php'); // Rediriger vers index.php
    } catch (Exception $e) {
        echo "Erreur lors de l'envoi de l'e-mail : {$mail->ErrorInfo}";
    }
}
