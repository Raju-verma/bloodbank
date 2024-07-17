<?php

session_start();
$username=$_SESSION['user'];
include "connection.php";
$sql="Select * from userinfo where username='$username'";
$rs=mysql_query($sql);
$row=mysql_fetch_array($rs);
$status3=$_POST['s1'];
$mid=$row['mid'];
$sql4="UPDATE `userinfo` SET `status3`='$status3' WHERE mid=$mid";
$rs4=mysql_query($sql4);



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Indore Blood</title>
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
				
				
				
				$("form#membersch").submit();
			}	
			);
	}

);

</script>

</head>

<body>
	<br />
	<br />
	<br />
	<?php include "membernav.php"; ?>
	<!--Reserved for Jumbotron-->	 
	<div class="container-fluid">
		<div class="row">
			<div class="jumbotron no-padding no-margin">
			
				<img src="img/1773584 - Copy.jpg" class="img-responsive no-padding"   />
						
			</div>
		</div>
	</div>
	<hr />
	<div class="container">
		
		<div class="row">
		
			
			   <div class="col-md-12">
			   		<div class="panel panel-default">
						<div class="panel-heading">
						<h3 class="panel-title" align="center">Update Doner Status</h3>
						</div>
					<div class="panel-body">
					<div class="col-md-12" align="center">
						<h4>Change Status</h4>
					</div>
							<h2 align="center">Status Updated Successfully</h2>	
					</div>
					</div> 	
			   </div>
		
		</div>
		
	
	</div>	
	
	
</body>
</html>
