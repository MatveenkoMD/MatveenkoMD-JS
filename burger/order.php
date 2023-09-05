<?php 

  $headers = 'Content-type: text/plain; charset="utf-8"';

  $username = $_POST['username'];
  $userphone = $_POST['userphone'];

  $headers = 'MiME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset="utf-8"';

  $to = 'volosunovmike6@gmail.com';
  $subject = 'Заявка на запись';
  $message = "
  <html>
  <table>
    <tr>
      <td>Имя</td>
      <td>$username</td>
    </tr>
    <tr>
      <td>Телефон</td>
      <td>$userphone</td>
    </tr>
  </table>
  </html>
  "

  mail($to, $subject, $message, $headers);
  // $to - кому
  // $subject - тема письма
  // $message - тело письма (содержимое)
  // $headers - спец заголовок, не трогаем

?>