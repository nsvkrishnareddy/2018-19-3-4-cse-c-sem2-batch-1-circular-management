<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.container {
  position: relative;
  font-family: Arial;
}
.center {
  margin: 80px;
  width: 60%;
  border: 3px solid #73AD21;
  padding: 10px;
}
.text-block {
  position: absolute;
  left:20px;
  top:20px;
  align:center;
  background-color: black;
  color: white;
  padding-left: 20px;
  padding-right: 20px;
}
body:before{
            content: '';
            position: fixed;
            width: 100vw;
            height: 100vh;
            background-image: url("../background/circbac.jpg");
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            
            
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
#banner
	{
		padding-top: 10em;
		text-align: center;
	}
	
	#banner .title h2
	{
		font-size: 4em;
	}
	
	#banner .title .byline
	{
		font-size: 2em;
	}
	
	#banner .button
	{
		margin-top: 2em;
		padding: 1.40em 3em;
		border-radius: 6px;
		font-weight: 700;
		font-size: 1em;
		
	}
	
	.banner
	{
		margin-bottom: 5em;
	}

.title
	{
		margin-bottom: 3em;
	}
	
	.title h2
	{
		font-size: 2.7em;
	}
	
	.title .byline
	{
		font-size: 1.3em;
		color: rgba(255,255,255,0.60);
	}
.button
	{
		display: inline-block;
		padding: 1em 2em 1em 2em;
		letter-spacing: 0.10em;
		margin-top: 2em;
		padding: 1.40em 3em;
		background: #2651a8;
		border-radius: 6px;
		text-decoration: none;
		font-weight: 700;
		font-size: 1em;
		color: #FFF;
	}
	
	.button-alt
	{
		padding: 1em 2em;
		border-color: rgba(0,0,0,.8);
		color: #FFF;
	}
div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body >
<div id="header" >
		<div id="logo">
			<h1><a href="admin.html">CIRCULARS</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li class="active"><a href="Studenthome.php" accesskey="1" title="">Homepage</a></li>
				<li><a href="Placements.html" accesskey="2" title="">Placements</a></li>
				
				<li><a href="#" accesskey="3" title="">College Magazine</a></li>
				<li><a href="contact.html" accesskey="4" title="">Contact Us</a></li>
                                <li><a href="logout.php" accesskey="5" title="">Logout</a></li>
			</ul>
		</div>
	
</div>

<div class="container">

  <div class="text-block">
    <h style="color:blue">CIRCULARS 2018</h><br>
     <div class="w3-row-padding">

<?php
$files = glob("../Admin/Student/images/Timetables/*.*");
for ($i=0; $i<count($files); $i++)
{
	$num = $files[$i];
    
echo '<img src="'.$num.'" alt="random image" class="w3-container w3-third" style="width:50 ;cursor:pointer" 
    onclick="onClick(this)" class="w3-hover-opacity" >'."";
       
	}

?>


<div id="modal01" class="w3-modal" onclick="this.style.display='none'">
  <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
  <div class="w3-modal-content w3-animate-zoom">
    <img id="img01" style="width:100%">
  
  </div>
</div>

<script>
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
}

</script>
</body>
</html>