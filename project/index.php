//<?php
//include("connection.php");
//include("session.php");//look session.php page
//?> 
<?php
include("header1.php");
?>

<div class="main3">
<?php include ("recommendation.php"); ?>
</div>
<script type="text/javascript" src="menu.js"></script>
    
        <script type="text/javascript">
            var image1 = new Image()
            image1.src = "images/1.jpg"
            var image2 = new Image()
            image2.src = "images/2.jpg"
            var image3 = new Image()
            image3.src = "images/3.jpg"
            var image4 = new Image()
            image4.src = "images/4.jpg"
			 var image5 = new Image()
            image5.src = "images/5.jpg"
			 var image6 = new Image()
            image6.src = "images/6.jpg"
			 var image7 = new Image()
            image7.src = "images/7.jpg"
			 var image8 = new Image()
            image8.src = "images/8.jpg"
			 var image9 = new Image()
            image9.src = "images/9.jpg"
</script>
<div id="contents">
<div class="main1">
<div id="side">
<h1 style="font-size: 1.2em;
    color: #FFF;
    padding: 10px;
    background: #126375;
    text-transform: uppercase;
   text-align:left;
   font-family:Georgia;
	
">Categories</h1>
<ul ><li><h1><img src="images/arrow.png">&nbsp&nbspAction</h1>
</li><li><h1><img src="images/arrow.png">&nbsp&nbspAdventure</h1></li><li><h1><img src="images/arrow.png">&nbsp&nbspComedy</h1></li><li><h1><img src="images/arrow.png">&nbsp&nbspDrama</h1></li>
<li><h1><img src="images/arrow.png">&nbsp&nbspFamily</h1></li><li><h1><img src="images/arrow.png">&nbsp&nbspFantasy</h1></li>
<li><h1><img src="images/arrow.png">&nbsp&nbspHorror</h1></li><li><h1><img src="images/arrow.png">&nbsp&nbspMystery</h1></li>
<li><h1><img src="images/arrow.png">&nbsp&nbspRomance</h1></li><li><h1><img src="images/arrow.png">&nbsp&nbspSci-Fi</h1></li></ul>
</div>


</div>
<div class="main2">

<div id="slider">
	<img src="f.jpg" width="100%" height="450px" name="slide" />
            <script type="text/javascript">
                 var step=1;
                    function slideit()
                      {
                          document.images.slide.src = eval("image"+step+".src");
                         if(step<9)
                            step++;
                         else
                             step=1;
                         setTimeout("slideit()",2500);
                      }
                    slideit();
       </script>
</div>

</div>


</div>

<div id="content2">
	<div class="ibox">
		<div class="image">
			<img src="images/notebook.jpg">
		</div>
		<div class="rating">
			<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
		</div>
	</div>
	<div class="ibox">
		<div class="image">
			<img src="images/drstrange.jpg">
		</div>
		<div class="rating">
			<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
		</div>
	</div>
	<div class="ibox">
		<div class="image">
			<img src="images/deadpool.jpg">
		</div>
		<div class="rating">
			<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
		</div>
	</div>
	<div class="ibox">
		<div class="image">
			<img src="images/dawnofpofapes.jpg">
		</div>
		<div class="rating">
			<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
		</div>
	</div>
	<div class="ibox">
		<div class="image">
			<img src="images/injustice.jpg">
		</div>
		<div class="rating">
			<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
		</div>
	</div>
	<div class="ibox">
		<div class="image">
			<img src="images/irobot.jpg">
		</div>
		<div class="rating">
			<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
		</div>
	</div>
	<div class="ibox">
		<div class="image">
			<img src="images/piratesofc.jpg">
		</div>
		<div class="rating">
			<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
		</div>
	</div>
	<div class="ibox">
		<div class="image">
			<img src="images/darknight.jpg">
		</div>
		<div class="rating">
			<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
		</div>
	</div>
	<div class="ibox">
		<div class="image">
			<img src="images/inception.jpg">
		</div>
		<div class="rating">
			<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
		</div>
	</div>
	<div class="ibox">
		<div class="image">
			<img src="images/thor.jpg">
		</div>
		<div class="rating">
			<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
		</div>
	</div>
	<div class="ibox">
		<div class="image">
			<img src="images/sourcecode.jpg">
		</div>
		<div class="rating">
			<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
		</div>
	</div>
	<div class="ibox">
		<div class="image">
			<img src="images/maleficent.jpg">
		</div>
		<div class="rating">
			<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
		</div>
	</div>





</div>	


<?php

include ("footer.php");
?>

