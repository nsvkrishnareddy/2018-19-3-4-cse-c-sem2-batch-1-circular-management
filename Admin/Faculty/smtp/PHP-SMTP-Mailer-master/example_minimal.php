<?php

require 'class/SMTPMailer.php';
$mail = new SMTPMailer();

$mail->addTo('$_POST["email"]');

$mail->Subject('Mail message for you');
$mail->Body=
    '<h3>Mail message</h3>
    This is a <b>html</b> ".$_POST["msg"]."<br>
    Greetings!';

if ($mail->Send()) echo 'Mail sent successfully';
else               echo 'Mail failure';

?>
<html>
<body>
<form action="example_minimal.php" method="POST">
  <div><input type="text" name="name" placeholder="name"></div>
 <div><input type="email" name="email" placeholder="email"></div>
 <div><textarea name="msg" placeholder="Message"></textarea></div>
 <div><input type="submit" name="submit" value="Send"></div>
</form>
</body>
</html>