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
                /*background-image: url("circ.jpg");*/
            content: '';
            
            width: 100vw;
            height: 100vh;
            background-image: url("circ.jpg");
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
             
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
		background: #121c1b;
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
	
	

.contact-form-1
        {
            position: absolute;
            top: 70%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 500px;
            height: 600px;
            margin-top:50px;
            padding: 80px 40px;
            box-sizing: border-box;
            background: linear-gradient(to top, #00ccff 0%, #0099ff 100%);
            border-radius:25px;
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
        .contact-form-1 h2 {
            margin: 0;
            padding: 0 0 20px;
            color: #fff;
            text-align: center;
            text-transform: uppercase;
        }
        .contact-form-1 p
        {
            margin: 0;
            padding: 0;
            font-weight: bold;
            color: #fff;
        }
        .contact-form-1 input
        {
            width: 100%;
            margin-bottom: 20px;
        }
        .contact-form-1 input[type="text"],
        .contact-form-1 input[type="password"]
        {
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 40px;
            color: #fff;
            font-size: 16px;
        }
        .contact-form-1 input[type="submit"] {
            height: 40px;
            width:150px;
            color: #fff;
            font-size: 15px;
            background: red;
            cursor: pointer;
            border-radius:15px;
            border: none;
            outline: none;
           margin-top:30px;
        }
        .contact-form-1 a
        {
            color: #fff;
            font-size: 14px;
            font-weight: bold;
            text-decoration: none;
        }
        input[type="checkbox"] {
            width: 20%;
        }



.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
   
  font-size: 0.90em;
  font-weight: 600; 
  border: none;
  outline: none;
  color: white;
  
  background-color: inherit;
  font-family: inherit;
  margin: 0;
  text-transform: uppercase;
  
		padding: 1.3em 1.5em;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background: #912D56;
		border-radius: 50%;
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

</style>
</head>
<body >
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			
			<div id="menu">
				<ul>
					<li><a href="#" accesskey="1" title="">Homepage</a></li>
					<li><a href="#" accesskey="2" title="">Search</a></li>
                                        <li><a href="#" accesskey="6" title="">Logout</a></li>
                                        <div class="dropdown">
                                         <button class="dropbtn">Sports 
                                                <i class="fa fa-caret-down"></i>
                                          </button>
                                             <div class="dropdown-content">
                                              <a href="Type.php">Type</a>
                                              <a href="upload.php">Upload</a>
                                              <a href="Delete.php">Delete</a>
                                               <a href="smtp/PHP-SMTP-Mailer-master/sendmail.php">Email</a>
      
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
                                             </div> 
				</ul>
			</div>
		</div>
	</div>
</div>
<!--<ul>
  <li><a class="active" href="logout.php">Logout</a></li>
  <li><a href="#news">College magazine</a></li>
  <li><a href="">Placements</a></li>
  <li><a href="../home.html">Home</a></li>
<span style="font-size:25px;cursor:pointer;color:black;" onclick="openNav()">&#9776; open</span>
</ul>-->
<div class="contact-form-1">
         
        <img src="2.jpg" class="avatar">
        <h2>TYPE A SPORTS CIRCULAR</h2>
        <form name="form" id="form" method="post" action="Convert.php"
        enctype="multipart/form-data" ">
            <p>Type here</p>
            <textarea  name="txt_input" id="para1"style="height:100px;width:400px;" placeholder="Type a circular...."></textarea>
            <p>File Name</p>
            <input type="text" class="input-field" name="tame" maxlength="50" placeholder="File name..">
            <center><input type="submit" id="submit" name="submit"
            value="Convert"></center>
            
        </form>
    </div>
	

<!--<div id="myNav" class="overlay">
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
  <a href="Type.php" id="Type">Type</a>
  <a href="upload.php" id="upload">Upload</a>
  <a href="Delete.php" id="delete">Delete</a>
  <a href="smtp/PHP-SMTP-Mailer-master/sendmail.php" id="Email">Email</a>
  <a href="loginusers.php" id="login">Users</a>
</div>-->


   
</body>
</html> 