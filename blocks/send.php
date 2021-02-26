<?php

$name = $_POST["name"];
$from = $_POST["email"];
$phone = $_POST["phone"];
$theme = $_POST["select"];
$comment = $_POST["comment"];

$to = "389195212@mail.ru";

$subject = "Новая заявка на сайте \'МеталлМедиа\'";

 $message = "Новая заявка на сайте: \n Имя: ".$name.", почта: ".$from.", телефон: ".$phone.", интересуется: ".$theme.", комментарий: ".$comment.". ";
// $message = wordwrap($message, 70, "\r\n");

// $headers  = "Content-type: text/html; charset=windows-1251 \r\n"; 
// $headers .= "From: От кого письмо <from@example.com>\r\n"; 
// $headers .= "Reply-To: reply-to@example.com\r\n"; 

// mail($to, $subject, $message, $headers); 

echo $message;

?>