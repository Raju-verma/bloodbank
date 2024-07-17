<?php
	
	include "connection.php";
	
	$hid=$_POST['hid'];
	$name=$_POST['name'];
	$add1=$_POST['add1'];	
	$add2=$_POST['add2'];
	$dist=$_POST['dist'];
	$state=$_POST['state'];
	$phone=$_POST['phone'];
	$pin=$_POST['pin'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$sql1="UPDATE `hospitalinfo` SET `name`='$name',`add1`='$add1',`add2`='$add2',`dist`='$dist',`state`='$state',`pin`=$pin,`email`='$email',`mobile`='$mobile',`phone`='$phone' WHERE hid=$hid";
	$rs1=mysql_query($sql1);
	
		if($rs1)
		{
			$msg="Member Modified  Successfully";
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
	
	<?php include "navadmin.php";?>
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
