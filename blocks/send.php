<?php

$name = $_POST["name"];
$from = $_POST["email"];
$phone = $_POST["phone"];
$theme = $_POST["select"];
$comment = $_POST["comment"];

$to = "389195212@mail.ru";

$subject = "Новая заявка на сайте \'МеталлМедиа\'";

$message = " <h1> Новая заявка на сайте:</h1> \n </br> <p> <b>  Имя: </b>  ".$name.", </br> </p> <p><b> Почта: </b> ".$from.", </br> </p> <p> <b> Контактный телефон: </b>".$phone.", </br> </p> <p> <b> Интересуется: </b>".$theme.", </br> </p> <p> <b> Комментарий: </b>".$comment.".</p>";
$message = wordwrap($message, 70, "\r\n");

$headers  = "Content-type: text/html; charset=\"utf-8\" \r\n"; 
$headers .= "From: От кого письмо <from@example.com>\r\n"; 
$headers .= "Reply-To: reply-to@example.com\r\n"; 

mail($to, $subject, $message, $headers); 

?>
