<?php
if($_POST['name']  && $_POST['mail'] && $_POST['subject']) {

    $name = $_POST['name'];
    $email = $_POST['mail'];
    $phone = $_POST['subject'];
    $information = $_POST['information'];

    $message = 'На сайте hexal была создана заявка';
    $message .= '<br>Имя: '.$name;
    $message .= '<br>E-mail: '.$mail;
    $message .= '<br>Тема: '.$subject;
    $message .= '<br>Дополнительная информация: '.$information;


    $headers= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8"."\r\n";
    $headers .= "From: altedev@yandex.ru <altedev@yandex.ru>"."\r\n";

    mail('altedev@yandex.ru', 'Заявка hexal', $message, $headers);

    echo json_encode(array('msg'=>'Ваша заявка отправлена'));
}