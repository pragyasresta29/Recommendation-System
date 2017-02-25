<div class="rec">
<div id="side">
<h1 style="font-size: 1.2em;
    color: #FFF;
    padding: 10px;
    background: #126375;
    text-transform: uppercase;
   text-align:left;
   font-family:Georgia;
	
">Recommendation</h1>
<div class="recbody">
<?php if(isset($_SESSION['user']))
{ include ("recmovies.php");
} 
else 
{echo "You are not logged in. Log in to get recommendations for you";} ?>
</div>


</div>

</div>