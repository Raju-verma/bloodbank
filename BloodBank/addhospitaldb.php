<?php
	
	
		include "connection.php";
		$name=$_POST['name'];
		$add1=$_POST['add1'];
		$add2=$_POST['add2'];
		$dist=$_POST['dist'];
		$state=$_POST['state'];
		$pin=$_POST['pin'];
		$email=$_POST['email'];
		$mobile=$_POST['mobile'];
		$phone=$_POST['phone'];
		$ap=$_POST['ap'];
		$an=$_POST['an'];
		$bp=$_POST['bp'];
		$bn=$_POST['bn'];
		$abp=$_POST['abp'];
		$abn=$_POST['abn'];
		$op=$_POST['op'];
		$on=$_POST['on'];

		
		
		$sql="INSERT INTO `hospitalinfo`(`name`, `add1`, `add2`, `dist`, `state`, `pin`, `email`, `mobile`, `phone`, `ap`, `an`, `bp`, `bn`, `abp`, `abn`, `op`, `on`) VALUES ('$name', '$add1', '$add2', '$dist', '$state', $pin, '$email', '$mobile', '$phone', $ap, $an, $bp, $bn, $abp, $abn, $op, $on)";
		$rs=mysql_query($sql);
		if($rs)
		{
			$sql1="Select * from hospitalinfo where name='$name' and mobile='$mobile'";
			$rs1=mysql_query($sql1);
			$row=mysql_fetch_array($rs1);
			$mid=$row['hid'];
			
		}
		else
		{
		
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
			
				if(!validateText("name"))
				{
					return false;
				}
				if(!validateText("so"))
				{
					return false;
				}
				if(!validateText("dob"))
				{
					return false;
				}
				
				if(!validateText("add1"))
				{
					return false;
				}
				
				if(!validateText("add2"))
				{
					return false;
				}
				if(!validateText("state"))
				{
					return false;
				}
				if(!validateText("dist"))
				{
					return false;
				}
				if(!validateText("pin"))
				{
					return false;
				}
				if(!validateText("email"))
				{
					return false;
				}
				if(!validateText("mobile"))
				{
					return false;
				}
				
				
				
				
				
				
				$("form#addmember").submit();
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
	<div class="container">
		
		<div class="row">
		
			
			   <div class="col-md-12">
			   		<div class="panel panel-default">
						<div class="panel-heading">
						<h3 class="panel-title" align="center">Member Added Successfully</h3>
						</div>
					<div class="panel-body" align="center">
							<h2>Registerd Successfully </h2>
							<br />
							<h1>Member ID: <?php echo $mid;?></h1>
							<br />
							<h2></h2>
							<h4></h4>
							<a href="" >Proceed To Login</a>
							
					</div>
					</div> 	
			   </div>
		
		</div>
		
	
	</div>	
	
	
</body>
</html>
