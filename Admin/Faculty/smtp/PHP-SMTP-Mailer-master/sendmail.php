<?php
 require 'class/SMTPMailer.php';



   
if(isset($_POST['email'])){
   if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
//show error message



}
else
{
  $mail = new SMTPMailer();
 
  $mail->addTo($_POST['email'],$_POST['name']);
  
  $mail->Subject="subject";
  $mail->Body('<h3>'.$_POST['msg'].'</h3>');
  
  if($mail->send())
  {
    echo"email sent";
   }
   else
{
  echo"error";
}



}

}



?>




<form action="p.php" method="POST">
  <div><input type="text" name="name" placeholder="name"></div>
 <div><input type="email" name="email" placeholder="email"></div>
 <div><textarea name="msg" placeholder="Message"></textarea></div>
 <div><input type="submit" name="submit" value="Send"></div>
</form>