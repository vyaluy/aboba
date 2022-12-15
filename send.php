$message = $_POST['message'];
$email = $_POST['email'];

$message = htmlspecialchars($message);
$email = htmlspecialchars($email);

$message = urldecode($message);
$email = urldecode($email);

$message = trim($message);
$email = trim($email);

mail("rakhmatullinb@gmail.com", "Заявка с сайта", "Сообщение:".$message.". E-mail: ".$email ,"From: example@mail.ru \r\n");
if (mail("rakhmatullinb@gmail.com", "Заявка с сайта", "Сообщение:".$message.". E-mail: ".$email ,"From: example@mail.ru \r\n"))
 {
    echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}