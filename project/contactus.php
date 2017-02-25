<!doctype HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Moviehub</title>
	<link rel=stylesheet type=text/css href=main.css>
	<link href="images/logo.jpg" rel="icon" type="image/x-icon" />
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
			<li><a href="featured.php">Popular</a></li>
			<li><a href="featured.php">Most Watched</a></li>
			<li><a href="featured.php">Blockbuster</a></li>
		</ul>
	</li>
	<li><a href="new.php">New Movies</a>
		<ul id="newmovies">
			<li><a href="addedtoday.php">Added Today</a></li>
			<li><a href="addedyest.php">Added Yesterday</a></li>
			<li><a href="addedweek.php">Added a Week Ago</a></li>
		</ul>
	</li>
	<li><a href="genres.php">Genres</a>
		<ul id="genres">
			<li>
				<li><a href="movies.php">Action</a></li>
				<li><a href="movies.php">Adventure</a></li>
				<li><a href="movies.php">Comedy</a></li>
				<li><a href="movies.php">Drama</a></li>
				<li><a href="movies.php">Family</a></li>
				<li><a href="movies.php">Fantasy</a></li>
				<li><a href="movies.php">Horror</a></li>
				<li><a href="movies.php">Mystery</a></li>
				<li><a href="movies.php">Romance</a></li>
				<li><a href="movies.php">Sci-fi</a></li>
			</li>
		</ul>
	</li>	
	<li><a href="aboutus.php">About Us</a></li>
	<li><a href="contactus.php">Contact Us</a></li>
	<li><a href="login.php">Login</a></li>
</ul>
</div>
</nav>
</div>
</div>
<div id="container">
<h1>Contact Us</h1>
<div id="contact" style="background-color:#43BFC5;height=650px; font-family:Consolas;padding:50px;" >

<form name="form1" method="post" border=1px >


<table>
	<tr>
		<td align="right">First name:</td>
		<td align="left"><input type="text" name="fname" placeholder="First name"></td>
	</tr>
<tr>
		<td align="right">Last name:</td>
		<td align="left"><input type="text" name="lname" placeholder="Last name"></td>
	</tr>
<tr>
		<td align="right">Phone:</td>
		<td align="left"><input type="number" name="bdate" placeholder="your phone no."></td>
	</tr>

<tr>
		<td align="right">Email:</td>
		<td align="left"><input type="email" name="email" placeholder="enter you email address"></td>
	</tr>
<tr>
		<td align="right">Password:</td>
		<td align="left"><input type="password" name="password" placeholder="enter password"></td>
</tr>
<tr>
		<td align="right">Re-Password:</td>
		<td align="left"><input type="password" name="pass" placeholder="re-enter password"></td>
</tr>
<tr>
		<td align="right">Gender:</td>
		<td align="left"><input type="radio" name="c1" >Male<input type="radio" name="c2" >Female</td>
</tr>
<tr>
	<td align="right">Comment:</td>
	<td align="left"><textarea style="width: 307px;height: 157px" placeholder="Your text here"></textarea>
<tr>
<td> </td>
<td align="right">
	

<input type="reset" value="Send">
<input type="reset" value="Reset"></td>
</tr>
</table>


</form>
</div>

<div id="footer1">

<div id="footer">
<h2>&copy;Pragya Shrestha</h2>
</div>
	</div>
</div>
</body>
</html>
<?php
?>
