
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
	<title>Moviehub</title>
	<link rel=stylesheet type=text/css href=main.css>
	<link href="images/popcorn.jpg" rel="icon" type="image/x-icon" />
	

</head>

<body>
<div id ="header1" >
<div id=header >
<nav>
<div id="nav_wrapper">
<ul id="menubar">
	<li><a href="index.php">Home</a></li>
	<li><a href="featured.php">Featured</a>
		<ul id="featlist">
			<li><a href="#">Popular</a></li>
			<li><a href="#">Most Watched</a></li>
			<li><a href="#">Blockbuster</a></li>
		</ul>
	</li>
	<li><a href="new.php">New Movies</a>
		<ul id="newmovies">
			<li><a href="#">Added Today</a></li>
			<li><a href="#">Added Yesterday</a></li>
			<li><a href="#">Added a Week Ago</a></li>
		</ul>
	</li>
	<li><a href="genres.php">Genres</a>
		<ul id="genres">
			<li>
				<li><a href="#">Adventure</a></li>
				<li><a href="#">Comedy</a></li>
				<li><a href="#">Drama</a></li>
				<li><a href="#">Family</a></li>
				<li><a href="#">Fantasy</a></li>
				<li><a href="#">Horror</a></li>
				<li><a href="#">Mystery</a></li>
				<li><a href="#">Romance</a></li>
				<li><a href="#">Sci-fi</a></li>
</li>
		</ul>
	</li>	
	<li><a href="aboutus.php">About Us</a></li>
	<li><a href="contactus.php">Contact Us</a></li>
</ul>

</div>
<div id="hside">
<table>
<tr>

	<td style="color:beige;">Welcome&nbsp<?php 
	if(isset($_SESSION['user'])){
		echo $_SESSION['user'];
	} 
	else {
		echo "Guest";
	} ?>|</td>
	<td><a style="color:beige; text-decoration:none;" href="<?php if(isset($_SESSION['user'])){echo "logout";}
	else{ echo "login";}?>.php"><?php if(isset($_SESSION['user'])){ echo "Logout";} else {echo "Login";} ?></a></td>
	</tr>
	</table>
	
</ul>
</div>
</nav>



</div>

</div>
<div id="container">
