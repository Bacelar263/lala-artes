<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader arte
require __DIR__ . '/vendor/autoload.php';


if(isset($_POST['enviar'])) {
    // Chamando classe mail
    $mail = new PHPMailer(true);

    try {
        //Configurar servidor
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
        $mail->isSMTP();                                            
        $mail->Host       = 'smtp.gmail.com';                     //Colocar configurações do SMTP
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'lalaartes20@gmail.com';                     //SMTP username
        $mail->Password   = 'doyrspqjaypdhnvd';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        //To load the French version
        $mail->setLanguage('pt_br', __DIR__ . './vendor/phpmailer/phpmailer/language/phpmailer.lang-pt_br.php');

        $email = $_POST['email'];

        //Recipients
        $mail->setFrom('lalaartes20@gmail.com', 'Lala Artes');
        $mail->addAddress('lala_bacelar@hotmail.com', 'Email do usuário');   //Name is optional
        $mail->addAddress($email, 'Email do usuário');               //Name is optional
        $mail->addReplyTo('bacelardev26@gmail.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'A empresa Lala Artes agradece seu contato!';

        $body = "Mensagem enviada através do site, segue informações abaixo:<br>
                 Nome:". $_POST['nome'] ."<br>
                 Email:". $email ."<br>
                 Mensagem:<br> 
                 ". $_POST['mensagem'] ."";

        $mail->Body = $body;
        $mail->AltBody = 'Entre em contato para mais informações!';

        $mail->send();
        echo 'O email foi enviado';
        
        // Redirecionar para a página anterior com JavaScript
        echo '<script>window.location.href = "../index.php?emailenviado=true";</script>';

        // Sair do script para evitar que o restante do código seja executado
        exit();


    } catch (Exception $e) {
        echo "Erro ao enviar o email: {$mail->ErrorInfo}";
    }
} else {
    echo "Erro ao enviar email. Acesso não foi via fomulário!";
}

?>

