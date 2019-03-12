<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.container {
  position: relative;
  font-family: Arial;
}

.text-block {
  position: absolute;
  top: 20px;
  left: 20px;
  background-color: black;
  color: white;
  padding-left: 80px;
  padding-right: 80px;
  padding-top:80px;
  padding-bottom:80px;
  margin:70px;
}
</style>
</head>
<body>
<div class="container">
  <img src="background/header-bg.jpg" alt="Nature" style="width:200%;">
  <div class="text-block">
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin";

// Create connection

if(isset($_POST["submit"])){ 
  
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {  
    $SID=$_POST['sid']; 
    $PASSWORD=$_POST['password'];  
  
    $con=mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_error());  
      
  
     $query=mysqli_query($con,"SELECT * FROM admin WHERE username='$SID' ");  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $dbusername=$row['username'];  
    $dbpassword=$row['password'];  
    }
     
    if( $PASSWORD == $dbpassword)   
    {  
  session_start();  
    $_SESSION['sess_user5']=$SID;
    
    header("Location: adminhome.php"); 
    exit; 
    } 
    } else {  
    echo "Invalid username or password!";  
    }  
  } else {  
    echo "All fields are required!";  
}  
}
