<?php
function sendMailPass($email, $username, $pass)
{
    require 'PHPMailer-master/src/Exception.php';
    require 'PHPMailer-master/src/PHPMailer.php';
    require 'PHPMailer-master/src/SMTP.php';

    $mail = new PHPMailer\PHPMailer\PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_OFF;
        $mail->isSMTP();
        $mail->Host       = 'sannbox.smtp.mailtrap.io';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'd0b1b4225641c7';
        $mail->Password   = '8596c2aad4e252';
        $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        //Recipients
        $mail->setFrom('duanmau@example.com', 'DuAnMau');
        $mail->addAddress($email, $username);

        //Content
        $mail->isHTML(true);
        $mail->Subject = 'Người dùng quên mật khẩu';
        $mail->Body    = 'Mật khẩu mới của bạn là: ' . $pass;

        $mail->send();
    } catch (Exception $e) {
        echo "Không thể gửi tin nhắn. Lỗi gửi thư: {$mail->ErrorInfo}";
    }
}

?>