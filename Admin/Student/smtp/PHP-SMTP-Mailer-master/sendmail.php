





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

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css'>

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.css'>

<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>

  
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

 
<style>

body {
  background: #eee;
 background-image: url("back.jpg");
  font: 12px Lucida sans, Arial, Helvetica, sans-serif;
	color: #333;
	
}
 body{
            
            margin: 0;
            padding: 0;
            
        }
.contact-form
        {
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 350px;
            height: 450px;
            margin-top:50px;
            padding: 80px 40px;
            box-sizing: border-box;
            background: linear-gradient(to top, #00ccff 0%, #0099ff 100%);
            border-radius: 25px;
        }
        .avatar {
            position: absolute;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            overflow: hidden;
            top: calc(-80px/2);
            left: calc(50% - 40px);
        }
        .contact-form h2 {
            margin: 0;
            padding: 0 0 20px;
            color: #fff;
            text-align: center;
            text-transform: uppercase;
        }
        .contact-form p
        {
            margin: 0;
            padding: 0;
            font-weight: bold;
            color: #fff;
        }
        .contact-form input
        {
            width: 100%;
            margin-bottom: 20px;
        }
        .contact-form input[type="text"],
        .contact-form input[type="password"]
        {
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 40px;
            color: #fff;
            font-size: 16px;
        }
        .contact-form input[type="submit"] {
            height: 40px;
            color: #fff;
            font-size: 15px;
            background: red;
            cursor: pointer;
            border-radius: 70px;
            border: none;
            outline: none;
           margin-top:30px;
        }
        .contact-form a
        {
            color: #fff;
            font-size: 14px;
            font-weight: bold;
            text-decoration: none;
        }
        input[type="checkbox"] {
            width: 20%;
        }


#mySidenav a {
  position: absolute;
  left: -80px;
  transition: 0.3s;
  padding: 15px;
  width: 100px;
  text-decoration: none;
  font-size: 20px;
  color: white;
  border-radius: 0 5px 5px 0;
}

#mySidenav a:hover {
  left: 0;
}

#Type {
  top: 100px;
  background-color: #4CAF50;
}

#upload {
  top: 170px;
  background-color: #2196F3;
}

#delete {
  top: 240px;
  background-color: #f44336;
}

#Email {
  top: 310px;
  background-color: #555;
}
#login {
  top: 380px;
  background-color: #00ffaa;
}
.overlay {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left:0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
  overflow-x: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  top: 25%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
}

.overlay a {
  padding: 4px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}
ul {
  list-style-type: none;
    margin: 0;
  padding: 0;
  overflow: hidden;
  float:top;
 background-color:#00ffd9;
}

li {
  float: right;
}

li a {
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size:20px;
}


</style>
</head>
<body >

<ul>
  <li><a class="active" href="logout.php">Logout</a></li>
  <li><a href="#news">College magazine</a></li>
  <li><a href="">Placements</a></li>
  <li><a href="../home.html">Home</a></li>
<span style="font-size:25px;cursor:pointer;color:black;" onclick="openNav()">&#9776; open</span>
</ul>
<div class="contact-form">
         
        <img src="2.jpg" class="avatar">
        <h2>SEND MAIL</h2>
        <form name="form" id="form" method="post" action="sendmail.php"
        enctype="multipart/form-data" ">
             <div><input type="text" name="name" placeholder="name"></div>
 <div><input type="email" class="input-field" name="email" placeholder="email"></div>
 <div><textarea name="msg" placeholder="Message"></textarea></div>
 <div><input type="submit" name="submit" value="Send"></div>
            
            
        </form>
    </div>
	

<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="Sports.php">Sports</a>
    <a href="Timetables.php">Timetables</a>
    <a href="Announcements.php">Announcements</a>
    <a href="Affiliated.php">Academic</a>
  </div>
</div>
<script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>


<div id="mySidenav" class="sidenav">
  <a href="../../Type.php" id="Type">Type</a>
  <a href="../../upload.php" id="upload">Upload</a>
  <a href="../../Delete.php" id="delete">Delete</a>
  <a href="smtp/PHP-SMTP-Mailer-master/sendmail.php" id="Email">Email</a>
  <a href="../../loginusers.php" id="login">Users</a>
</div>


   
</body>
</html> 




