<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $school = $_POST['school'];
    $speciality = $_POST['speciality'];

    $cv = $_FILES['cv'];
    $cover_letter = $_FILES['cover_letter'];

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'motechcodev@gmail.com';
        $mail->Password = 'zxmt bluo azha mgml';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Destinataire
        $mail->setFrom($email, $name);
        $mail->addAddress('joshuatchioffouo423@gmail.com');

        // Contenu de l'e-mail
        $mail->isHTML(true);
        $mail->Subject = 'Nouvelle inscription';
        $mail->Body    = "
            <html>
            <head>
            <title>Nouvelle inscription</title>
            </head>
            <body>
            <p>Vous avez une nouvelle inscription :</p>
            <table>
            <tr><th>Nom:</th><td>$name</td></tr>
            <tr><th>Email:</th><td>$email</td></tr>
            <tr><th>Téléphone:</th><td>$phone</td></tr>
            <tr><th>École:</th><td>$school</td></tr>
            <tr><th>Spécialité:</th><td>$speciality</td></tr>
            </table>
            </body>
            </html>
        ";

        // Ajouter les pièces jointes
        if ($cv['error'] == UPLOAD_ERR_OK) {
            $mail->addAttachment($cv['tmp_name'], $cv['name']);
        }
        if ($cover_letter['error'] == UPLOAD_ERR_OK) {
            $mail->addAttachment($cover_letter['tmp_name'], $cover_letter['name']);
        }

        // Envoyer l'e-mail
        $mail->send();
        echo 'Email envoyé avec succès.';
    } catch (Exception $e) {
        echo "Erreur lors de l'envoi de l'email : {$mail->ErrorInfo}";
    }
}
