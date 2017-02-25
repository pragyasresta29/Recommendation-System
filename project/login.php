<?php
	ob_start();
	include("connection.php");
	session_start();
?>

<?php
include ("header1.php");
?>
<body background="images/login.jpg">

    
    <div id="contents">
		
    	<div class="login">
        <form name="frmuser" action="" method="post" >
        <table cellpadding="4" cellspacing="3">
        	<tr>
            	<td>Username : </td>
                <td><input type="text" name="txtusername" required/></td>
            </tr>
            <tr>
            	<td>Password : </td>
                <td><input type="password" name="txtpassword" required/></td>
            </tr>
            
             <tr>
            	<td>&nbsp;</td>
                <td><input type="submit" name="btnsubmit" id="logbutton" value="Login" /></td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td><p>Not registered!&nbsp<a href="signup.php">SignUp</a></p></td>
            </tr>
        </table>
		<?php
	if(isset($_POST['btnsubmit'])&& $_POST['btnsubmit']=='Login')
	{
		$username=$_POST['txtusername'];
		$password=md5($_POST['txtpassword']);
		$query="select * from user where Username='$username' and Password='$password'";
		$rr=mysqli_query($connect,$query);
		$result=mysqli_num_rows($rr);
		echo $query;
		//echo $result;
		if($result>0)
		{
			
			$query1="update user set Active=1 where Username='$username'and Password='$password';";
			$rr1=mysqli_query($connect,$query1);
			$result=mysqli_num_rows($rr1);
			$_SESSION['user']=$username;	
			header('Location:index1.php');
			
		}
		else
		{
			echo "<span style='color:red'>Incorrect user name or password</span>";
		}
	}
	
	?>
		</form>
		</div>
		
    
	
	
	</div>
</div>
</body>
</html>
<?php
?>
