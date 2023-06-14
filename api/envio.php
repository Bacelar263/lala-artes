<?php

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

//Load Composer's autoloader arte
require __DIR__ . '/vendor/autoload.php';

if(isset($_POST['enviar'])) {
    // Chamando classe mail
    $mail = new PHPMailer\PHPMailer\PHPMailer();

    try {
        //Configurar servidor
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
        $mail->isSMTP();                                            
        $mail->Host       = 'smtp.hostinger.com';                     //Colocar configurações do SMTP
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'lala@lalaartes.com';                     //SMTP username
        $mail->Password   = '@Ridufu123_';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        $email = $_POST['email'];

        //Recipients
        $mail->setFrom('lala_bacelar@hotmail.com', 'Mailer');
        $mail->addAddress('bacelardev26@gmail.com', 'Guilherme Bacelar');     //Add a recipient
        $mail->addAddress($email, 'Email do usuário');               //Name is optional
        $mail->addReplyTo('bacelardev26@gmail.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Mensagem via phpmailer';

        $body = "Mensagem enviada através do site, segue informações abaixo:<br>
                 Nome:". $_POST['nome'] ."<br>
                 Email:". $email ."<br>
                 Mensagem:<br> 
                 ". $_POST['mensagem'] ."";

        $mail->Body = $body;
        $mail->AltBody = 'Entre em contato para mais informações!';

        $mail->send();
        echo 'O email foi enviado';
    } catch (Exception $e) {
        echo "Erro ao enviar o email: {$mail->ErrorInfo}";
    }
} else {
    echo "Erro ao enviar email. Acesso não foi via fomulário!";
}

?>