<?php
	
	include "connection.php";
	
	$mid=$_POST['mid'];
	$name=$_POST['name'];
	
	
	
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$username=$name.$mid;
	$password=$mid.$mobile;
	$role="Member";
	$blood=$_POST['blood'];
	$status1="Yes";
	$status2="Yes";
	$status3="Yes";
	$msg='';
	$sql1="INSERT INTO `userinfo`(`mid`, `name`, `blood`, `mobile`, `email`, `username`, `password`, `role`, `status1`, `status2`, `status3`) VALUES ($mid, '$name', '$blood', '$mobile', '$email', '$username', '$password', '$role', '$status1', '$status2','$status3')";
	$rs1=mysql_query($sql1);
	if($rs1)
	{
		
		$sql2="UPDATE `memberinfo` SET `status`='Yes' where mid=$mid";
		$rs2=mysql_query($sql2);
		if($rs2)
		{
			$msg="Member Verified  Successfully";
		}
	}
	else
	{
		$msg="Something Went Wrong !! Try Again Later";
	}
	
	?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Golden Football Club</title>
<link  href="css/bootstrap.min.css" rel="stylesheet" />
<link  href="style.css" rel="stylesheet" />
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
function validateText(id)
{
	if($("#"+id).val()==null|| $("#"+id).val()=="")
	{
		var div=$("#"+id).closest("div");
		div.addClass("has-error");
		return false;
	}
	else
	{
		var div=$("#"+id).closest("div");
		div.removeClass("has-error");
		return true;
	}
}

$(document).ready(
	function(){
			$("#loginbtn").click(function(){
			
				if(!validateText("s1"))
				{
					return false;
				}
				if(!validateText("s2"))
				{
					return false;
				}
				if(!validateText("s3"))
				{
					return false;
				}
				
				
				$("form#membersch").submit();
			}	
			);
	}

);

</script>

</head>

<body>
	
	<nav class="navbar navbar-default navbar-inverse" role="navigation">
	
		<div class="container-fluid">
		 <div class="navbar-header">
			<a class="navbar-brand" href="#">Indore Blood</a>
			 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-abc-navbar-collapse-1">
			 <span class="sr-only">Toggle navigation</span>
			 <span class="icon-bar"></span>
			 
			 <span class="icon-bar"></span>
			 <span class="icon-bar"></span> 
			 </button> 
		</div>
		
		 <div class="collapse navbar-collapse" id="bs-abc-navbar-collapse-1"> 
		<ul class="nav navbar-nav">
			
			<li class="dropdown">    
			       <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"				aria-expanded="false">Member Management 
				   <span class="caret"></span>
				   </a>
				   <ul class="dropdown-menu" role="menu">     
				      <li><a href="VerifyMember.php">Verify Member</a></li>            
					  <li><a href="#">Remove Member</a></li>            
					  <li><a href="#">Notify Member</a></li>            
					  <li class="divider"></li>            
					  <li><a href="ListMember.php">List Member</a></li>            
					            
					  <li><a href="ListMemberGrp.php">List Member By Blood Group</a></li>
					  
					  
					</ul>        
			</li>
			
			<li><a class="page-scroll" href="" >Logout</a></li>
			
		</ul>
		
		</div>	
		
		</div>
	
	</nav>
	
	<!--Reserved for Jumbotron-->	 
	<div class="container-fluid">
		<div class="row">
			<div class="jumbotron no-padding no-margin">
			
				<img src="img/1773584 - Copy.jpg" class="img-responsive no-padding"   />
						
			</div>
		</div>
	</div>
	<hr />
	<div class="container" >
		
		<div class="row"  align="center">
		
			<h2><?php echo $msg;?></h2>
			
		</div >
		
	
	</div >	
	
	
	
</body>
</html>
