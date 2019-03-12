<?php
session_start();
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
 body{
            margin: 0;
            padding: 0;
        }
        body:before{
            content: '';
            position: fixed;
            width: 100vw;
            height: 100vh;
            background-image: url("../background/admin.jpg");
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
             -webkit-filter: blur(4px);
            -moz-filter: blur(4px);
            -o-filter: blur(4px);
            -ms-filter: blur(4px);
            filter: blur(4px);
            
        }
.contact-form
        {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 400px;
            height: 500px;
            margin-top:50px;
            padding: 80px 40px;
            box-sizing: border-box;
            background:#000000;
        }
.container {
  position: relative;
  font-family: Arial;
  width: 1000px;
  height:5000px;
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


	#header
	{
		position: relative;
		padding: 5em 0em;
	}

	#logo
	{
		position: absolute;
		top: 3.6em;
		left: 0;
	}
	
	#logo h1
	{
		font-size: 2.6em;
		color: #79C255;
	}
	
	#logo a
	{
		text-decoration: none;
		color: rgba(255,255,255,1);
	}


	#menu
	{
		position: absolute;
		top: 4.5em;
		right: 0;
	}
	
	#menu ul
	{
		display: inline-block;
	}
	
	#menu li
	{
		display: block;
		float: left;
		text-align: center;
	}
	
	#menu li a, #menu li span
	{
		padding: 1em 1.5em;
		letter-spacing: 1px;
		text-decoration: none;
		text-transform: uppercase;
		font-size: 0.8em;
		color: rgba(255,255,255,0.80);
	}
	
	#menu li:hover a, #menu li.active a, #menu li.active span
	{
	}
	
	#menu .active a
	{
		background: #2651a8;
		border-radius: 6px;
		color: rgba(255,255,255,1);
	}
	
	#menu .icon
	{
	}
 
	ul.style1
	{
	}
	
	ul.actions
	{
	}
	
	ul.actions li
	{
		display: inline-block;
		padding: 0em 0.50em;
	}



	ul.contact
	{
		margin: 0;
		padding: 2em 0em 0em 0em;
		list-style: none;
	}
	
	ul.contact li
	{
		display: inline-block;
		padding: 0em 0.30em;
		font-size: 1em;
	}
	
	ul.contact li span
	{
		display: none;
		margin: 0;
		padding: 0;
	}
	
	ul.contact li a
	{
		color: #FFF;
	}
	
	ul.contact li a:before
	{
		display: inline-block;
		background: #3f3f3f;
		width: 40px;
		height: 40px;
		line-height: 40px;
		border-radius: 20px;
		text-align: center;
		color: #FFFFFF;
	}
	
	ul.contact li a.icon-twitter:before { background: #2DAAE4; }
	ul.contact li a.icon-facebook:before { background: #39599F; }
	ul.contact li a.icon-dribbble:before { background: #C4376B;	}
	ul.contact li a.icon-tumblr:before { background: #31516A; }
	ul.contact li a.icon-rss:before { background: #F2600B; }
.button {
  background-color: #c40099; /* Green */
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
margin-left:auto;
margin-right:auto;
display:block;
margin-top:4%;

}

</style>
</head>
<body background=#787879>

	<div id="header" >
		<div id="logo">
			<h1><a href="admin.html">CIRCULARS</a></h1>
		</div>
<?php
 echo "<font color='white'>".$_SESSION['sess_user5']."</font><br><br>";
?>
		<div id="menu">
			<ul>
				<li class="active"><a href="home.html" accesskey="1" title="">Homepage</a></li>
				<li><a href="Placements.html" accesskey="2" title="">Placements</a></li>
				
				<li><a href="#" accesskey="3" title="">College Magazine</a></li>
				<li><a href="contact.html" accesskey="4" title="">Contact Us</a></li>
                                
                                
			</ul>
		</div>
	
</div>
<div class="contact-form">
  

  
<?php


    
    
   
    echo'<a class="button" href="Student/type.php">Student circulars</a><br><br>';
   echo '<a class="button" href="upf.html">Faculty circulars</a><br><br>';
   echo '<a class="button"href="uph.html">H.O.D circulars</a><br><br>';

     
   

	

?>

</div>

</body>
</html>