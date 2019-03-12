<?php
session_start();
?>
<html>
<head>
<title>Fullscreen Navigation</title>
  
 
 
 <title>Fullscreen Navigation</title>
  
 
 
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css'>

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.css'>

<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>

  
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

 
<style>
	html, body
	{
		height: 100%;
	}
	
	body
	{
		margin: 0px;
		padding: 0px;
		background: #3E4947;
		font-family: 'Questrial', sans-serif;
		font-size: 12pt;
		color: rgba(0,0,0,.6);
	}
	
	
	h1, h2, h3
	{
		margin: 0;
		padding: 0;
		color: #404040;
	}
	
	p, ol, ul
	{
		margin-top: 0;
	}
	
	ol, ul
	{
		padding: 0;
		list-style: none;
	}
	
	p
	{
		line-height: 180%;
	}
	
	strong
	{
	}
	
	a
	{
		color: #16A085;
	}
	
	a:hover
	{
		text-decoration: none;
	}
	

	.container
	{
		margin: 0px auto;
		width: 1200px;
	}
	

/*********************************************************************************/
/* Form Style                                                                    */
/*********************************************************************************/

		form
		{
		}
		
			form label
			{
				display: block;
				text-align: left;
				margin-bottom: 0.5em;
			}
			
			form .submit
			{
				margin-top: 2em;
				line-height: 1.5em;
				font-size: 1.3em;
			}
		
			form input.text,
			form select,
			form textarea
			{
				position: relative;
				-webkit-appearance: none;
				display: block;
				border: 0;
				background: #fff;
				background: rgba(255,255,255,0.75);
				width: 100%;
				border-radius: 0.50em;
				margin: 1em 0em;
				padding: 1.50em 1em;
				box-shadow: inset 0 0.1em 0.1em 0 rgba(0,0,0,0.05);
				border: solid 1px rgba(0,0,0,0.15);
				-moz-transition: all 0.35s ease-in-out;
				-webkit-transition: all 0.35s ease-in-out;
				-o-transition: all 0.35s ease-in-out;
				-ms-transition: all 0.35s ease-in-out;
				transition: all 0.35s ease-in-out;
				font-size: 1em;
				outline: none;
			}

				form input.text:hover,
				form select:hover,
				form textarea:hover
				{
				}

				form input.text:focus,
				form select:focus,
				form textarea:focus
				{
					box-shadow: 0 0 2px 1px #E0E0E0;
					background: #fff;
				}
				
				form textarea
				{
					min-height: 12em;
				}

				form .formerize-placeholder
				{
					color: #555 !important;
				}

				form ::-webkit-input-placeholder
				{
					color: #555 !important;
				}

				form :-moz-placeholder
				{
					color: #555 !important;
				}

				form ::-moz-placeholder
				{
					color: #555 !important;
				}

				form :-ms-input-placeholder
				{
					color: #555 !important;
				}

				form ::-moz-focus-inner
				{
					border: 0;
				}


/*********************************************************************************/
/* Image Style                                                                   */
/*********************************************************************************/

	.image
	{
		display: inline-block;
		border: 1px solid rgba(0,0,0,.1);
	}
	
	.image img
	{
		display: block;
		width: 100%;
	}
	
	.image-full
	{
		display: block;
		width: 100%;
		margin: 0 0 3em 0;
	}
	
	.image-left
	{
		float: left;
		margin: 0 2em 2em 0;
	}
	
	.image-centered
	{
		display: block;
		margin: 0 0 2em 0;
	}
	
	.image-centered img
	{
		margin: 0 auto;
		width: auto;
	}

/*********************************************************************************/
/* List Styles                                                                   */
/*********************************************************************************/

	ul.style1
	{
	}


/*********************************************************************************/
/* Social Icon Styles                                                            */
/*********************************************************************************/

	ul.contact
	{
		margin: 0;
		padding: 2em 0em 0em 0em;
		list-style: none;
	}
	
	ul.contact li
	{
		display: inline-block;
		padding: 0em 0.10em;
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
		background: #3A4442;
		width: 40px;
		height: 40px;
		line-height: 40px;
		text-align: center;
		color: rgba(255,255,255,.5);
	}
	

/*********************************************************************************/
/* Button Style                                                                  */
/*********************************************************************************/

	.button
	{
		display: inline-block;
		margin-top: 2em;
		padding: 0.8em 2em;
		background: #2D1E25;
		border-radius: 50%;
		line-height: 1.8em;
		letter-spacing: 1px;
		text-decoration: none;
		font-size: 1em;
		color: #FFF;
	}
	
	.button:before
	{
		display: inline-block;
		background: #8DCB89;
		margin-right: 1em;
		width: 40px;
		height: 40px;
		line-height: 40px;
		border-radius: 20px;
		text-align: center;
		color: #272925;
	}
	
	.button-small
	{
	}
		
/*********************************************************************************/
/* Heading Titles                                                                */
/*********************************************************************************/

	.title
	{
		margin-bottom: 3em;
	}
	
	.title h2
	{
		font-size: 2.8em;
	}
	
	.title .byline
	{
		font-size: 1.1em;
		color: #6F6F6F;
	}

/*********************************************************************************/
/* Header                                                                        */
/*********************************************************************************/

	#header-wrapper
	{
		overflow: hidden;
		padding: 2em 0em;
		background: #2F1E28;
	}

	#header
	{
		text-align: center;
	}

/*********************************************************************************/
/* Logo                                                                          */
/*********************************************************************************/

	#logo
	{
	}
	
	#logo h1
	{
		display: inline-block;
		margin-bottom: 0.20em;
		padding: 0.20em 0.9em;
		font-size: 3.5em;
	}
	
	#logo a
	{
		text-decoration: none;
		color: #FFF;
	}
	
	#logo span
	{
		padding-right: 0.5em;
		text-transform: uppercase;
		font-size: 0.90em;
		color: rgba(255,255,255,1);
	}

	#logo span a
	{
		color: rgba(255,255,255,0.8);
	}
	
	

/*********************************************************************************/
/* Menu                                                                          */
/*********************************************************************************/

	#menu
	{
	}
	
	#menu ul
	{
		display: inline-block;
		padding: 0em 2em;
		text-align: center;
	}
	
	#menu li
	{
		display: inline-block;
	}
	
	#menu li a, #menu li span
	{
		display: inline-block;
		padding: 1.3em 1.5em;
		text-decoration: none;
		font-size: 0.90em;
		font-weight: 600;
		text-transform: uppercase;
		outline: 0;
		color: #FFF;
	}
	
	#menu li:hover a, #menu li.active a, #menu li.active span
	{
		background: #912D56;
		border-radius: 50%;
	}
	
	#menu .current_page_item a
	{
		color: #FFF;
	}
	

/*********************************************************************************/
/* Banner                                                                        */
/*********************************************************************************/

	#banner
	{
	}

/*********************************************************************************/
/* Wrapper                                                                       */
/*********************************************************************************/


	.wrapper
	{
		overflow: hidden;
		padding: 0em 0em 5em 0em;
		background: #FFF;
	}

	#wrapper1
	{
		background: #FFF;
	}

	#wrapper2
	{
		overflow: hidden;
		background: #F3F3F3;
		padding: 5em 0em;
		text-align: center;
	}

	#wrapper3
	{
	}
	
	#wrapper4
	{
	}

/*********************************************************************************/
/* Welcome                                                                       */
/*********************************************************************************/

	#welcome
	{
		overflow: hidden;
		width: 1000px;
		padding: 2em 100px 0em 100px;
		text-align: center;
		color: #7D6774;
	}
	
	#welcome .content
	{
		padding: 0em 8em;
	}
	
	#welcome .title h2
	{
		color: #C6C2C4;
	}
	
	#welcome a,
	#welcome strong
	{
		color: #C6C2C4;
	}

/*********************************************************************************/
/* Page                                                                          */
/*********************************************************************************/

	#page-wrapper
	{
		overflow: hidden;
		background: #2F1E28;
		padding: 3em 0em 6em 0em;
		text-align: center;
	}

	#page
	{
	}

/*********************************************************************************/
/* Content                                                                       */
/*********************************************************************************/

	#content
	{
		float: left;
		width: 700px;
		padding-right: 100px;
		border-right: 1px solid rgba(0,0,0,.1);
	}

/*********************************************************************************/
/* Sidebar                                                                       */
/*********************************************************************************/

	#sidebar
	{
		float: right;
		width: 350px;
	}

/*********************************************************************************/
/* Footer                                                                        */
/*********************************************************************************/

	#footer
	{
		text-align: center;
	}

	
	#footer .title span
	{
		color: rgba(255,255,255,0.4);
	}

/*********************************************************************************/
/* Copyright                                                                     */
/*********************************************************************************/

	#copyright
	{
		overflow: hidden;
		padding: 5em 0em;
		border-top: 20px solid rgba(255,255,255,0.08);
		text-align: center;
	}
	
	#copyright p
	{
		letter-spacing: 1px;
		font-size: 0.90em;
		color: rgba(255,255,255,0.6);
	}
	
	#copyright a
	{
		text-decoration: none;
		color: rgba(255,255,255,0.8);
	}

/*********************************************************************************/
/* Newsletter                                                                    */
/*********************************************************************************/

	#newsletter
	{
		overflow: hidden;
		padding: 8em 0em;
		background: #EDEDED;
		text-align: center;
	}
	
	#newsletter .title h2
	{
		color: rgba(0,0,0,0.8);
	}
	
	#newsletter .content
	{
		width: 600px;
		margin: 0px auto;
	}
	
/*********************************************************************************/
/* Portfolio                                                                     */
/*********************************************************************************/

	#portfolio
	{
	}
	
	#portfolio .box
	{
		text-align: center;
		color: rgba(0,0,0,0.5);
	}
	
	#portfolio h3
	{
		display: block;
		padding-bottom: 1em;
		font-size: 1em;
		color: rgba(0,0,0,0.6);
	}

	#portfolio .title
	{
		text-align: center;
	}

	#portfolio .title h2
	{
		color: rgba(0,0,0,0.8);
	}

	.column1,
	.column2,
	.column3,
	.column4
	{
		width: 282px;
	}
	
	.column1,
	.column2,
	.column3
	{
		float: left;
		margin-right: 24px;
	}
	
	.column4
	{
		float: right;
	}

/*********************************************************************************/
/* Three Columns                                                                 */
/*********************************************************************************/

	#three-column
	{
		overflow: hidden;
		text-align: center;
	}
	
	#three-column h2
	{
		margin: 1em 0em;
		font-size: 1.5em;
		font-weight: 700;
	}
	
	#three-column .icon
	{
		position: relative;
		display: block;
		margin: 0px auto 0.80em auto;
		background: none;
		line-height: 150px;
		font-size: 4em;
		width: 150px;
		height: 150px;
		border-radius: 100px;
		border: 6px solid #67128F;
		text-align: center;
		color: #FFF;
		
	}
		
	#three-column #tbox1,
	#three-column #tbox2,
	#three-column #tbox3
	{
		float: left;
		width: 320px;
		padding: 80px 40px 80px 40px;
	}
	
	#three-column .title
	{
		text-align: center;
	}
	
	#three-column .title h2
	{
		font-size: 1.60em;
	}
	
	#three-column .title .byline
	{
		padding-top: 0.50em;
		font-size: 0.90em;
		color: #858585;
	}

	#three-column .arrow-down
	{
		border-top-color: #292929;
	}
	
	
	ul.tools
	{
		margin: 0;
		padding: 0em 0em 0em 0em;
		list-style: none;
	}
	
	ul.tools li
	{
		display: inline-block;
		padding: 0em .2em;
		font-size: 4em;
	}
	
	ul.tools li span
	{
		display: none;
		margin: 0;
		padding: 0;
	}
	
	ul.tools li a
	{
		color: #FFF;
	}
	
	ul.tools li a:before
	{
		display: inline-block;
		background: #1ABC9C;
		width: 120px;
		height: 120px;
		border-radius: 50%;
		line-height: 120px;
		text-align: center;
		color: #FFFFFF;
	}
	.dropdown-content {
  
		display: none;
		padding: 1.3em 1.5em;
		text-decoration: none;
		font-size: 0.90em;
		font-weight: 600;
		text-transform: uppercase;
		outline: 0;
		color: #FFF;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
  text-transform:uppercase;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}	
	
	

body{
background-color: lightblue;
}
body {
  background: #eee;
 
  font: 12px Lucida sans, Arial, Helvetica, sans-serif;
	color: #333;
	
}
 body{
            
            margin: 0;
            padding: 0;
            
        }
        
a {
	color: #2A679F;
}
/*========*/
a {font-size: 20px;}
section {
  display: -webkit-flex;
  display: flex;
}
article {
  -webkit-flex: 1;
  -ms-flex: 1;
  flex: 1;
  width:450px;
  align:center;
  
  background-color: #f1f1f1;
  padding: 5px;
}

.form-wrapper {
	
	border-style: solid;
	border-width: 1px;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px;
        
	-webkit-box-shadow: 0 3px 3px rgba(255,255,255,.1), 0 3px 0 #bbb, 0 4px 0 #aaa, 0 5px 5px #444;
	-moz-box-shadow: 0 3px 3px rgba(255,255,255,.1), 0 3px 0 #bbb, 0 4px 0 #aaa, 0 5px 5px #444;
	box-shadow: 0 3px 3px rgba(255,255,255,.1), 0 3px 0 #bbb, 0 4px 0 #aaa, 0 5px 5px #444;
	margin: 100px auto;
	overflow: hidden;
	padding: 8px;
	width: 450px;
}

.form-wrapper #search {
         
	border: 1px solid #CCC;
	-webkit-box-shadow: 0 1px 1px #ddd inset, 0 1px 0 #FFF;
	-moz-box-shadow: 0 1px 1px #ddd inset, 0 1px 0 #FFF;
	box-shadow: 0 1px 1px #ddd inset, 0 1px 0 #FFF;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
  color: #999;
	float: left;
	font: 16px Lucida Sans, Trebuchet MS, Tahoma, sans-serif;
	height: 45px;
	padding: 10px;
	width: 340px;
}

.form-wrapper #search:focus {
	border-color: #aaa;
	-webkit-box-shadow: 0 1px 1px #bbb inset;
	-moz-box-shadow: 0 1px 1px #bbb inset;
	box-shadow: 0 1px 1px #bbb inset;
	outline: 0;
}

.form-wrapper #search:-moz-placeholder,
.form-wrapper #search:-ms-input-placeholder,
.form-wrapper #search::-webkit-input-placeholder {
	color: #999;
	font-weight: normal;
}

.form-wrapper #submit1 {
	background-color: #3333;
	background-image: -webkit-gradient(linear, left top, left bottom, from(#31b2c3), to(#0483a0));
	background-image: -webkit-linear-gradient(top, #31b2c3, #0483a0);
	background-image: -moz-linear-gradient(top, #31b2c3, #0483a0);
	background-image: -ms-linear-gradient(top, #31b2c3, #0483a0);
	background-image: -o-linear-gradient(top, #31b2c3, #0483a0);
	background-image: linear-gradient(top, #31b2c3, #0483a0);
	border: 1px solid #00748f;
	-moz-border-radius: 3px;
	-webkit-border-radius: 4px;
	border-radius: 3px;
	-webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.3) inset, 0 1px 0 #FFF;
	-moz-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.3) inset, 0 1px 0 #FFF;
	box-shadow: 0 1px 0 rgba(255, 255, 255, 0.3) inset, 0 1px 0 #FFF;
	color: #fafafa;
	cursor: pointer;
	height: 42px;
	float: right;
	font: 15px Arial, Helvetica;
	padding: 0;
	text-transform: uppercase;
	text-shadow: 0 1px 0 rgba(0, 0 ,0, .3);
	width: 100px;
}

.form-wrapper #submit1:hover,
.form-wrapper #submit1:focus {
	background-color: #31b2c3;
	background-image: -webkit-gradient(linear, left top, left bottom, from(#0483a0), to(#31b2c3));
	background-image: -webkit-linear-gradient(top, #0483a0, #31b2c3);
	background-image: -moz-linear-gradient(top, #0483a0, #31b2c3);
	background-image: -ms-linear-gradient(top, #0483a0, #31b2c3);
	background-image: -o-linear-gradient(top, #0483a0, #31b2c3);
	background-image: linear-gradient(top, #0483a0, #31b2c3);
}

.form-wrapper #submit1:active {
	-webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5) inset;
	-moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5) inset;
	box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5) inset;
	outline: 0;
}

.form-wrapper #submit1::-moz-focus-inner {
	border: 0;
}


</style>
</head>
<body style=" background-color:#7ED4E6";>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
                         <h4><li><?php echo "<font color='white'>".$_SESSION['sess_user']."</font><br><br>";?></li></h4>
			<h1><a href="#">Students Search</a></h1>
			<div id="menu">
				<ul>
					<li><a href="Studenthome.php" accesskey="1" title="">Homepage</a></li>
					<li><a href="searchresults.php" accesskey="2" title="">Search Sports Circular</a></li>
                                        <li><a href="searchacademic.php" accesskey="3" title="">Search Academic Circular</a></li>
                                        <li><a href="searchtimetable.php" accesskey="4" title="">Search Timetable Circular</a></li>
                                        <li><a href="searchothers.php" accesskey="5" title="">Search Others</a></li>
                                        <li><a href="logout.php" accesskey="6" title="">Logout</a></li>
                                        
                                        <!--<div class="dropdown">
                                         <button class="dropbtn">Sports 
                                                <i class="fa fa-caret-down"></i>
                                          </button>
                                             <div class="dropdown-content">
                                              <a href="#">Type</a>
                                              <a href="#">Upload</a>
                                              <a href="#">Delete</a>
                                               <a href="#">Email</a>
      
                                                   </div>
                                             </div> 
                                          <div class="dropdown">
                                         <button class="dropbtn">Timetables
                                                <i class="fa fa-caret-down"></i>
                                          </button>
                                             <div class="dropdown-content">
                                              <a href="#">Type</a>
                                              <a href="#">Upload</a>
                                              <a href="#">Delete</a>
                                               <a href="#">Email</a>
      
                                                   </div>
                                             </div> 
                                         <div class="dropdown">
                                         <button class="dropbtn">academics 
                                                <i class="fa fa-caret-down"></i>
                                          </button>
                                             <div class="dropdown-content">
                                              <a href="#">Type</a>
                                              <a href="#">Upload</a>
                                              <a href="#">Delete</a>
                                               <a href="#">Email</a>
      
                                                   </div>
                                             </div> 
                                          <div class="dropdown">
                                         <button class="dropbtn">Others
                                                <i class="fa fa-caret-down"></i>
                                          </button>
                                             <div class="dropdown-content">
                                              <a href="#">Type</a>
                                              <a href="#">Upload</a>
                                              <a href="#">Delete</a>
                                               <a href="#">Email</a>
      
                                                   </div>
                                             </div> -->
				</ul>
			</div>
		</div>
	</div>
</div>

<div id="page-wrapper">
	<div id="welcome" class="container">
		<div class="title">
			<h2>Welcome to our website</h2>
		</div>
		<p>Search circular by name/date to view the image quickly.For eg:<strong>time or timetable or 3-10-2018 etc.</strong> :) </p>
	</div>
</div>



<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

   
 <script  src="js/index.js"></script>

<form action="searchresults.php" class="form-wrapper" method="POST">
 
<input type="text"  id="search" name="search_entered" placeholder='Search here' required/> 
 
<input type="submit" name="submit"  id="submit1" title="Search" value="Go"/></button>

</form>


<?php
if(isset($_POST['submit'])){
$search= $_POST['search_entered'];

$searchoriginal= $search;

$search= strtolower($search);

$search= trim($search);



$search= explode(" ", $search);

$countsearchterms= count($search);

$submitbutton= $_POST['submit'];

?>

<?php

$directory = "../Admin/Student/images/Timetables/";


if ($submitbutton){
if (!empty($searchoriginal)) 
{
if (is_dir($directory)){

  if ($open = opendir($directory)){
if ($countsearchterms == 1)
{
    while (($file = readdir($open)) !== false){
	$fileoriginal= $file;
	$file= strtolower($file);
	$position= strpos("$file", ".");
	$fileextension= substr($file, $position + 1);
	$fileextension= strtolower($fileextension);
	
	
      if ((strpos("$file",  "$search[0]") !== false) && (($fileextension == "jpg") || ($fileextension == "jpeg") || ($fileextension == "png") || ($fileextension == "bmp")))
	{
	/*$array[] += "$file";*/
	/* echo "<img style='width: 200px;' src='/images/$fileoriginal'>". "<br><br><hr>";*/
        /* echo "<a href='$directory" . "$fileoriginal'>$file</a>"."<br>";*/
        /* echo '<a  href="'.$fileoriginal.'" title="'.$fileoriginal.'" ></a>'."<br/>";*/
        echo"<center>";
          echo "<article>";
             echo "<br><center><a href='$directory" . "$fileoriginal' class='w3-border w3-padding'>&nbsp; $file</a>


        </center>  ";
             echo "</article>";
       echo"</center>";

}

    }
}
else if ($countsearchterms == 2) {
while (($file = readdir($open)) !== false){
	$fileoriginal= $file;
	$file= strtolower($file);
	$position= strpos("$file", ".");
	$fileextension= substr($file, $position + 1);
	$fileextension= strtolower($fileextension);
	

      if (((strpos("$file",  "$search[0]") !== false) && (strpos("$file",  "$search[1]") !== false)) && (($fileextension == "jpg") 
|| ($fileextension == "jpeg") || ($fileextension == "png") || ($fileextension == "bmp"))) {
	/*$array[] += "$file";*/
	/* echo "<img style='width: 200px;' src='/images/$fileoriginal'>". "<br><br><hr>";*/
        echo"<center>";
echo" <div class='w3-col m7'>";
echo"<div class='w3-container w3-card w3-white w3-round w3-margin'><br>";

        echo"   <div class='w3-row-padding'>";
       
          echo"<div class='w3-row-padding' style='margin:0 -16px'>";
          /* echo"<div class='w3-card w3-round w3-white'>";
            echo"<div class='w3-container w3-padding'>";*/
             echo "<br><center><a href='$directory" . "$fileoriginal' class='w3-border w3-padding'>&nbsp; $file</a>


        </center>  ";
             
       echo" <hr class='w3-clear'>";

         /*echo" </div>";*/
         echo" </div>";
        echo"</div>";
      echo"</div>";
     echo"</div>";
echo"</center>";
}
 
	
    }
    

}

else if ($countsearchterms == 3) {
while (($file = readdir($open)) !== false){
	$fileoriginal= $file;
	$file= strtolower($file);
	$position= strpos("$file", ".");
	$fileextension= substr($file, $position + 1);
	$fileextension= strtolower($fileextension);
	

      if (((strpos("$file",  "$search[0]") !== false) && (strpos("$file",  "$search[1]") !== false) && (strpos("$file",  "$search[2]") !== false)) 
&& (($fileextension == "jpg") || ($fileextension == "jpeg") || ($fileextension == "png") || ($fileextension == "bmp")))
	{
	/*$array[] += "$file";*/
	/* echo "<img style='width: 200px;' src='/images/$fileoriginal'>". "<br><br><hr>";*/
        echo"<center>";
echo" <div class='w3-col m7'>";
echo"<div class='w3-container w3-card w3-white w3-round w3-margin'><br>";

        echo"   <div class='w3-row-padding'>";
       
          echo"<div class='w3-row-padding' style='margin:0 -16px'>";
          /* echo"<div class='w3-card w3-round w3-white'>";
            echo"<div class='w3-container w3-padding'>";*/
             echo "<br><center><a href='$directory" . "$fileoriginal' class='w3-border w3-padding'>&nbsp; $file</a>


        </center>  ";
             
       echo" <hr class='w3-clear'>";

         /*echo" </div>";*/
         echo" </div>";
        echo"</div>";
      echo"</div>";
     echo"</div>";
echo"</center>";
}
 
	
    }
    

}

else if ($countsearchterms == 4) {
while (($file = readdir($open)) !== false){
	$fileoriginal= $file;
	$file= strtolower($file);
	$position= strpos("$file", ".");
	$fileextension= substr($file, $position + 1);
	$fileextension= strtolower($fileextension);
	

      if (((strpos("$file",  "$search[0]") !== false) && (strpos("$file",  "$search[1]") !== false) && (strpos("$file",  "$search[2]") !== false)&& (strpos("$file",  "$search[3]") !== false))
&& (($fileextension == "jpg") || ($fileextension == "jpeg") || ($fileextension == "png") || ($fileextension == "bmp")))
	{
	/*$array[] += "$file";*/
	/*echo "<img style='width: 200px;' src='/images/$fileoriginal'>". "<br><br><hr>";*/
echo"<center>";
echo" <div class='w3-col m7'>";
echo"<div class='w3-container w3-card w3-white w3-round w3-margin'><br>";

        echo"   <div class='w3-row-padding'>";
       
          echo"<div class='w3-row-padding' style='margin:0 -16px'>";
          /* echo"<div class='w3-card w3-round w3-white'>";
            echo"<div class='w3-container w3-padding'>";*/
             echo "<br><center><a href='$directory" . "$fileoriginal' class='w3-border w3-padding'>&nbsp; $file</a>


        </center>  ";
             
       echo" <hr class='w3-clear'>";

         /*echo" </div>";*/
         echo" </div>";
        echo"</div>";
      echo"</div>";
     echo"</div>";
echo"</center>";
}
 
	
    }
    

}

else if ($countsearchterms == 5) {
while (($file = readdir($open)) !== false){
	$fileoriginal= $file;
	$file= strtolower($file);
	$position= strpos("$file", ".");
	$fileextension= substr($file, $position + 1);
	$fileextension= strtolower($fileextension);
	

      if (((strpos("$file",  "$search[0]") !== false) && (strpos("$file",  "$search[1]") !== false) && (strpos("$file",  "$search[2]") !== false)&& (strpos("$file",  "$search[3]") !== false)
&& (strpos("$file",  "$search[4]") !== false)) && (($fileextension == "jpg") || ($fileextension == "jpeg") || ($fileextension == "png") || ($fileextension == "bmp")))
	{
	/*$array[] += "$file";*/
	/*echo "<img style='width: 200px;' src='/images/$fileoriginal'>". "<br><br><hr>";*/
       echo"<center>";
echo" <div class='w3-col m7'>";
echo"<div class='w3-container w3-card w3-white w3-round w3-margin'><br>";

        echo"   <div class='w3-row-padding'>";
       
          echo"<div class='w3-row-padding' style='margin:0 -16px'>";
          /* echo"<div class='w3-card w3-round w3-white'>";
            echo"<div class='w3-container w3-padding'>";*/
             echo "<br><center><a href='$directory" . "$fileoriginal' class='w3-border w3-padding'>&nbsp; $file</a>


        </center>  ";
             
       echo" <hr class='w3-clear'>";

         /*echo" </div>";*/
         echo" </div>";
        echo"</div>";
      echo"</div>";
     echo"</div>";
echo"</center>";
}
}  
}
else if ($countsearchterms == 6) {
while (($file = readdir($open)) !== false){
	$fileoriginal= $file;
	$file= strtolower($file);
	$position= strpos("$file", ".");
	$fileextension= substr($file, $position + 1);
	$fileextension= strtolower($fileextension);
	

      if (((strpos("$file",  "$search[0]") !== false) && (strpos("$file",  "$search[1]") !== false) && (strpos("$file",  "$search[2]") !== false)&& (strpos("$file",  "$search[3]") !== false)
&& (strpos("$file",  "$search[4]") !== false) && (strpos("$file",  "$search[5]") !== false)) && (($fileextension == "jpg") || ($fileextension == "jpeg") 
|| ($fileextension == "png") || ($fileextension == "bmp")))
	{
	/*$array[] += "$file";*/
	/*echo "<img style='width: 200px;' src='/images/$fileoriginal'>". "<br><br><hr>";*/
echo"<center>";
echo" <div class='w3-col m7'>";
echo"<div class='w3-container w3-card w3-white w3-round w3-margin'><br>";

        echo"   <div class='w3-row-padding'>";
       
          echo"<div class='w3-row-padding' style='margin:0 -16px'>";
          /* echo"<div class='w3-card w3-round w3-white'>";
            echo"<div class='w3-container w3-padding'>";*/
             echo "<br><center><a href='$directory" . "$fileoriginal' class='w3-border w3-padding'>&nbsp; $file</a>


        </center>  ";
             
       echo" <hr class='w3-clear'>";

         /*echo" </div>";*/
         echo" </div>";
        echo"</div>";
      echo"</div>";
     echo"</div>";
echo"</center>";
}
}  
}
else if ($countsearchterms == 7) {
while (($file = readdir($open)) !== false){
	$fileoriginal= $file;
	$file= strtolower($file);
	$position= strpos("$file", ".");
	$fileextension= substr($file, $position + 1);
	$fileextension= strtolower($fileextension);

      if (((strpos("$file",  "$search[0]") !== false) && (strpos("$file",  "$search[1]") !== false) && (strpos("$file",  "$search[2]") !== false)&& (strpos("$file",  "$search[3]") !== false)
&& (strpos("$file",  "$search[4]") !== false) && (strpos("$file",  "$search[5]") !== false) && (strpos("$file",  "$search[6]") !== false))
&& (($fileextension == "jpg") || ($fileextension == "jpeg") || ($fileextension == "png") || ($fileextension == "bmp")))
	{
	/*$array[] += "$file";*/
	/*echo "<img style='width: 200px;' src='/images/$fileoriginal'>". "<br><br><hr>";*/
        echo"<center>";
echo" <div class='w3-col m7'>";
echo"<div class='w3-container w3-card w3-white w3-round w3-margin'><br>";

        echo"   <div class='w3-row-padding'>";
       
          echo"<div class='w3-row-padding' style='margin:0 -16px'>";
          /* echo"<div class='w3-card w3-round w3-white'>";
            echo"<div class='w3-container w3-padding'>";*/
             echo "<br><center><a href='$directory" . "$fileoriginal' class='w3-border w3-padding'>&nbsp; $file</a>


        </center>  ";
             
       echo" <hr class='w3-clear'>";

         /*echo" </div>";*/
         echo" </div>";
        echo"</div>";
      echo"</div>";
     echo"</div>";
echo"</center>";
}
}  
}
}
closedir($open);
    }
  }//while loop

/*$arraycount= count($array);

if ($arraycount == 0)
{
echo "No results for this search entered";
}*/

}
}

?>
</body>
</html>