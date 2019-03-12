<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600|Archivo+Narrow:400,700" rel="stylesheet" type="text/css" />
<!--<link href="default.css" rel="stylesheet" type="text/css" media="all" />-->
<style>
html, body {
	height: 100%;
}

body {
	margin: 0px;
	padding: 0px;
	background: #1F1F1F;
	font-family: 'Open Sans', sans-serif;
	font-size: 13px;
	color: #4F4F4F;
}


h1, h2, h3 {
	margin: 0;
	padding: 0;
}


p, ol, ul {
	margin-top: 0px;
	
}

ol, ul
{
	margin: 0px;
	padding: 0px;
	list-style:  none
}

p {
	line-height: 180%;
}

strong {
}

a {
	color: #0000FF;
}

a:hover {
	text-decoration: none;
}

a img {
	border: none;
}

img.border {
}

img.alignleft {
	float: left;
}

img.alignright {
	float: right;
}

img.aligncenter {
	margin: 0px auto;
}

hr {
	display: none;
}

ul.style1
{
}

ul.style1 li
{
	padding: 1.50em 0em 1.90em 0em;
	border-top: 1px solid #e8e8e8;
}

ul.style1 a
{
	text-decoration: none;
	color: #6e6d6d;
}

ul.style1 a:hover
{
	text-decoration: underline;
}

ul.style1 .posted
{
	font-size: 0.90em;
	color: #b6b6b6;
}

ul.style1 .first
{
	padding-top: 0em;
	border-top: none;
}

/** WRAPPER */

#wrapper {
	overflow: hidden;
	background: #FFFFFF url(images/bg-top.png) repeat-x left top;
}

#wrapper-bgbtm {
	overflow: hidden;
	padding: 5em 0em;
	background: url(images/bg-btm.png) repeat-x left bottom;
}

.container {
	width: 1200px;
	margin: 0px auto;
}

.clearfix {
	clear: both;
}

#header
{
	overflow: hidden;
	height: 150px;
}

/** LOGO */

#logo
{
	position: relative;
	float: left;
	width: 380px;
	height: 100px;
}

#logo h1, #logo p
{
	margin: 0px;
	line-height: normal;
}

#logo h1 a
{
	display: block;
	position: absolute;
	top: 0px;
	left: 0px;
	width: 100%;
	height: 100%;
	line-height: 150px;
	color: #FFFFFF;
	text-decoration: none;
	text-transform: uppercase;
	font-weight: 400;
	font-size: 1.50em;
}

#logo span
{
	color: #FEC709;
}

/** MENU */

#menu
{
	padding: 60px 0px 0px 0px;
}

#menu ul
{
	float: right;
	margin: 0px;
	padding: 0px;
	list-style: none;
	line-height: normal;
}

#menu li
{
	float: left;
	margin-left: 2em;
}

#menu a
{
	display: block;
	padding: 0.50em 1em;
	text-decoration: none;
	text-transform: uppercase;
	font-weight: 400;
	font-size: 1.00em;
	color: #979A97;
}

#menu a:hover
{
	text-decoration: underline;
	color: #FFFFFF;
}

#menu .active a
{
	border-radius: 5px;
	background: #FEC709;
	color: #000000;
}

#menu .first
{
	padding-left: 0px;
	border-left: none;
	box-shadow: none;
}

/** PAGE */

#page {
}

/** CONTENT */

#content {
	float: left;
	width: 800px;
}

#content h2
{
	margin-bottom: 0.20em;
	letter-spacing: -1px;
	font-size: 3em;
	font-weight: 600;
}

#content .byline
{
	display: block;
	text-transform: uppercase;
	font-size: 1.10em;
	font-weight: 400;
	margin-bottom: 2em;
}

#content img
{
	margin-bottom: 1em;
}

/** SIDEBAR */

#sidebar {
	float: right;
	width: 350px;
}

#sidebar h2
{
	font-size: 2em;
	margin-bottom: 1em;
	font-weight: 600;
}

/* Footer */

#footer {
	overflow: hidden;
	padding: 5em 0em;
}

#footer p {
	text-align: center;
	font-size: 12px;
}

#footer a {
	color: #767676;
}


#featured
{
	overflow: hidden;
	margin-bottom: 3em;
	padding-bottom: 4em;
	border-bottom: 1px solid #e8e8e8;
}

#featured img
{
	display: block;
	width: 100%;
}

#featured p
{
	text-align: center;
}

#featured h2
{
	padding: 20px 0px 20px 0px;
	text-align: center;
	text-transform: uppercase;
	font-size: 1.00em;
	font-weight: 700;
	font-family: 'Open Sans', sans-serif;
	color: #151515;
}

#featured .title 
{
	margin-bottom: 40px;
	border-top: 1px solid #D8D8D8;
	border-bottom: 1px solid #D8D8D8;
	font-family: 'Open Sans', sans-serif;
	font-size: 2.50em;
	color: #151515 !important;
}

#fbox1
{
	float: left;
	width: 350px;
}

#fbox2
{
	float: left;
	width: 400px;
	margin-left: 50px;
}


#fbox3
{
	float: right;
	width: 350px;
}

.button
{
	display: block;
	margin-top: 3em;
	text-align: center;
	text-decoration: none;
}

.button span
{
	padding: 0.75em 2em;
	background: #FEC709;
	border-radius: 10px;
	text-transform: uppercase;
	font-weight: 700;
	color: #151515;
}

.button2
{
	display: inline-block;
	margin-top: 2em;
	text-align: center;
	text-decoration: none;
	padding: 0.75em 2em;
	background: #FEC709;
	border-radius: 10px;
	text-transform: uppercase;
	font-weight: 700;
	color: #151515;
}



</style>
</head>
<body>
<div id="header" class="container">
	<div id="logo">
		<h1><a href="#">AD<span>MIN</span></a></h1>
	</div>
	<div id="menu">
		<ul>
			<li class="active"><a href="#" accesskey="1" title="">Homepage</a></li>
			<li><a href="#" accesskey="2" title="">About</a></li>
			<li><a href="#" accesskey="3" title="">College Magazine</a></li>
			<li><a href="#" accesskey="4" title="">Others</a></li>
			<li><a href="#" accesskey="5" title="">Logout</a></li>
		</ul>
	</div>
</div>
<div id="wrapper">
	<div id="wrapper-bgbtm">
		<div id="featured" class="container">
			<div id="fbox1"> <a href="#"><img src="images/im1.jpg" alt="" /></a>
				<h2>Student</h2>
				<p>Click here to type,upload or delete student circulars.</p>
				<a href="Student/Student.php" class="button"><span>Upload</span></a> </div>
			<div id="fbox2"> <a href="#"><img src="images/im2.jpg" alt="" /></a>
				<h2>Faculty</h2>
				<p>Click here to type,upload or delete student circulars.</p>
				<a href="Faculty/Faculty.php" class="button"><span>Upload</span></a> </div>
			<div id="fbox3"> <a href="#"><img src="images/im4.jpg" alt="" /></a>
				<h2>H.O.D</h2>
				<p>Click here to type,upload or delete H.O.D circulars. </p>
				<a href="HOD/Hod.php" class="button"><span>Upload</span></a> </div>
		</div>
		<!--<div id="page" class="container">
			<div id="content">
				<h2>Libero volutpat pulvinar</h2>
				<span class="byline">Gravida sed consequat lorem ipsum dolor</span>
				<p><img src="images/pic04.jpg" width="800" height="200" alt="" />Pellentesque viverra vulputate enim. Aliquam erat volutpat. Pellentesque tristique ante ut risus. Quisque dictum. Integer nisl risus, sagittis convallis, rutrum id, elementum congue, nibh. Suspendisse dictum porta lectus. Donec placerat odio vel elit. Nullam ante orci, pellentesque eget, tempus quis, ultrices in, est. Curabitur sit amet nulla. Nam in massa. Sed vel tellus. Curabitur sem urna, consequat vel, suscipit in, mattis placerat, nulla. Sed ac leo. Pellentesque imperdiet. Donec leo. Vivamus fermentum nibh in augue.</p>
				<a href="#" class="button2">More Info</a> </div>
			<div id="sidebar">
				<div>
					<h2>Categories</h2>
					<ul class="style1">
						<li class="first">
							<p><a href="#">Ipsum ante vivamus semper faucibus varius. Nam risus nibh, commodo vulputate.</a></p>
							<span class="posted">8 hours ago</span> </li>
						<li>
							<p><a href="#">Sed amet consequat lorem ipsum dolor sit amet blandit feugiat lorem ipsum sed ante nibh.</a></p>
							<span class="posted">1 day ago</span> </li>
						<li>
							<p><a href="#">Pellentesque tristique ante ut risus. Quisque dictum. Sed amet consequat lorem ipsum dolor sit amet blandit feugiat lorem ipsum sed ante nibh.</a></p>
							<span class="posted">4 days ago</span> </li>
					</ul>
				<a href="#" class="button2">More Info</a> </div>
				</div>
			</div>
		</div>-->
	</div>
</div>

</body>
</html>
