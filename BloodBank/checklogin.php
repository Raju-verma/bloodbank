<?php

	$con=mysql_connect("localhost","root","");
	if(!$con)
	{
		echo 'Arpit';
	}
	mysql_select_db("bloodbank",$con);
	session_start();
	$error='';
	
			
			$username=$_POST['username'];
			$password=$_POST['pass'];
			echo $username;
			echo $password;
			//echo $password;
			//$username=stripslashes($username);
			//$password=stripslashes($password);
			//$username=mysql_real_escape_string($username);
			//$password=mysql_real_escape_string($password);
			
			$sql="select * from userinfo where username='$username' and password='$password'";
			
			$rs=mysql_query($sql);
			$rows=mysql_fetch_array($rs);
			
			$role=$rows['role'];
			if($role=='Admin')
			{
				$_SESSION['user']=$username;
				header("Location:admin.php");
			}
			else if($role=='Member')
			{
				$_SESSION['user']=$username;
				header("Location:member.php");
			}
			else
			{
				$error="Invalid Username/Password";
			}
				
			
			
			
	

?>