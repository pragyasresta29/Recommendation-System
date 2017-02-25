<?php



include ("header1.php");
include ("connection.php");

?>
<div id="box">
<div id="signup">
    <form name="signup" method="post" enctype="multipart/form-data">
        <table cellpadding="4" cellspacing="3">
        	<tr>
            	<td>First Name : </td>
                <td><input type="text" name="fname" required/></td>
            </tr>
            <tr>
            	<td>Last Name : </td>
                <td><input type="text" name="lname" required/></td>
            </tr>
            <tr>
            	<td>Email : </td>
                <td><input type="email" name="email" required/></td>
            </tr>
            <tr>
            	<td>Username : </td>
                <td><input type="text" name="uname" required/>
            </tr>
            <tr>
            	<td>Password : </td>
                <td><input type="password" name="pword" required/>
            </tr>
             <tr>
            	<td>&nbsp;</td>
                <td><input type="submit" name="btnsubmit" id ="logbutton" value="Save"/></td>
            </tr>
        </table>
    <?php
	if(isset($_POST['btnsubmit'])&& $_POST['btnsubmit']=='Save')
	{
		$fname=$_POST['fname'];
        $lname=$_POST['lname'];
		$email=$_POST['email'];
        $uname=$_POST['uname'];
        $pword=md5($_POST['pword']);
		$query="insert into user values('','$fname','$lname','$email','$uname','$pword',0)";
		echo $query;
		$result=mysqli_query($connect,$query);
		if($result)
		{
			
			echo "<span style='color:green'>Student Inserted Successfully</span>";
            header('Location:login.php');
		}
		else
		{
			echo "<span style='color:red'>Insertion Failed</span>";
		}
	}
    ?>
    </form>
	
</div>
</div>