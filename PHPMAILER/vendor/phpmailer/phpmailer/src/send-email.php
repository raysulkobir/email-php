  <?php
    include_once('PHPMailer.php');
    include_once("Example.php");

    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\PHPMailer;

    $mail = new PHPMailer();

    try {
        $mail->setFrom("test@gmail.com");
        $mail->addAddress("test2@gmail.com");
        $mail->Subject = "Test";
        $mail->Body = "This is the HTML message body <b>in bold!</b>";
        $mail->AltBody = "This is the body in plain text for non-HTML mail clients";
        $mail->isHTML(true);
    }
    catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
