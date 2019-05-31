<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

if ($_POST)
{
    $name = $_POST['userName'];
    $phone = $_POST['userPhone'];
    $email = $_POST['userEmail'];
    $message = $_POST['userMessage'];
    $nameCompany = $_POST['userCompany'];

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'dawils@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
    $mail->Password = 'passm6819084ks'; // Ваш пароль от почты с которой будут отправляться письма
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

    $mail->setFrom('dawils@mail.ru'); // от кого будет уходить письмо?
    $mail->addAddress('elkirrs@gmail.com');     // Кому будет уходить письмо
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Заявка на обратную связь';
    $mail->Body    = 'Клиент: ' .$name . '<br> оставил заявку, его телефон: ' .$phone. '<br>Почта этого пользователя: ' .$email.
        '<br>Название компании: ' . $nameCompany . '<br>Сообщение: <br>' . $message;
    $mail->AltBody = '';

    if(!$mail->send()) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="button">
    <strong>'. $name .'</strong>  , При отправлке Вашего сообщения возникла ошибка, повторите отправку еще раз.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>';
    }
    else
        {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="button">
    <strong>'. $name .'</strong>  Ваше обращение успешно отправлено, в ближайщее время с Вами свяжутся!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>';
    }
}

