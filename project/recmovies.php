<div id="recmovies">


<a href="#">
<?php
	$result = exec("python rec1.py");
	echo ('<script> console.log("'.$result.'"); </script>'); 
	echo ($result."<br>");
?> </a>
<a href="#">
<?php
	$result = exec("python rec2.py");
	echo ('<script> console.log("'.$result.'"); </script>'); 
	echo ($result."<br>");
?> </a>
<a href="#">
<?php
	$result = exec("python rec3.py");
	echo ('<script> console.log("'.$result.'"); </script>');
	echo ($result."<br>");
?> </a>
<a href="#">
<?php
	$result = exec("python rec4.py");
	echo ('<script> console.log("'.$result.'"); </script>');
	echo ($result."<br>");
?> </a>
<a href="#">
<?php
	$result = exec("python rec5.py");
	echo ('<script> console.log("'.$result.'"); </script>');
	echo ($result."<br>");
?> </a>


</div>