<!-- Через 10 секунд после появления сообщения об отправке или ошибке — отправляемся на сайт Кода :) -->
<meta http-equiv='refresh'>
<meta charset="UTF-8" />
<!-- Начался блок PHP -->
<?php
// Получаем значения переменных из пришедших данных
$to = "info@impulsegateway.com";
$name = $_POST['name'];
$email = $_POST['email'];
$telegram = $_POST['telegram'];
$url = $_POST['url'];
$payment = $_POST['payment'];

$message = "Name: $name , ";
$message .= "Email: $email , ";
$message .= "Telegram: $telegram , ";
$message .= "Type: $type ";
$message .= "Payment: $payment ";

$mes = "Name: $name \nE-mail: $email \nTelegram: $telegram \nPayment: $payment \nUrl: $url";

// Формируем сообщение для отправки, в нём мы соберём всё, что ввели в форме
// Пытаемся отправить письмо по заданному адресу
// Если нужно, чтобы письма всё время уходили на ваш адрес — замените первую переменную $email на свой адрес электронной почты
$send = mail($to, $email, $mes);
// Если отправка прошла успешно — так и пишем
if ($send == 'true') { header('location: thank.html'); }
// Если письмо не ушло — выводим сообщение об ошибке
else {echo "Error";}
?>