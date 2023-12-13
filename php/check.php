<?php
 //print_r($_POST);
 $email = $_POST['email'];
 $phone = $_POST['phone'];

 $error = '';
 if(trim($email) == '')
    $error = 'Введите Ваш email';
 else if(trim($phone) == '')
    $error = 'Введите номер телефона';

 if($error !=  ''){
    echo $error;
    exit;
  }

  $subject = "=?utf-8?B?".base64_encode("Тестовое сообщение")."?=";
  $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";

  mail('irinka_udodova@mail.ru', $subject, $phone, $headers);
  
  header('Location: /about.php');

?>