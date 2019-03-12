<?php
session_start();
?>
<html>
<head>
<title>Loginusers</title>
    <meta charset="UTF-8">
    
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
            background-image: url("background/up.jpg");
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            
            
        }
        .contact-form
        {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 400px;
            height: 450px;
            margin-top:50px;
            padding: 80px 40px;
            box-sizing: border-box;
            background:#FFFFFF;
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

    </style>
</head>

<body>
<div id="header" >
		<div id="logo">
			<h1><a href="admin.html">CIRCULARS</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li ><a href="home.html" accesskey="1" title="">Homepage</a></li>
				<li><a href="Placements.html" accesskey="2" title="">Placements</a></li>
				
				<li><a href="#" accesskey="3" title="">College Magazine</a></li>
				<li><a href="contact.html" accesskey="4" title="">Contact Us</a></li>
                                <li><a href="logout.php" accesskey="5" title="">Logout</a></li>
                                <li class="active"><a href="logusers.php" accesskey="6" title="">Login users</a></li>
			</ul>
		</div>
	
</div>
<div class="contact-form">
<h1>LOGIN USERS</h1>
<?php

foreach($_SESSION as $key => $value)
{
   
   echo '' . $value.'<br/>';
}
?>
</div>
</body>
</html>
