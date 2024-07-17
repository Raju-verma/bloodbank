<?php
	
	include "connection.php";
	
	$mid=$_POST['s1'];
	
	
	$sql1="select * from memberinfo where mid=$mid";
	$rs1=mysql_query($sql1);
	$row1=mysql_fetch_array($rs1);
	
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
			
				
				
				
				$("form#verify").submit();
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
		
		<div class="row" >
		
			
			   <div class="col-md-12" >
			   		<div class="panel panel-default" >
						<div class="panel-heading">
						<h3 class="panel-title" align="center">Verify Member</h3>
						</div>
					<div class="panel-body">
					<div class="col-md-12" align="center">
						<h4>Personal Details</h4>
					</div>
							<form  role="form" id="verify" class="form-horizontal" action="verifysuccess.php" method="post">
								<div class="form-group">
									<label for="Email" class="col-sm-2 " >Member ID</label>
									<div class="col-sm-4">
									<input type="text" class="form-control" readonly="" name="mid" id="mid" placeholder="Name" value="<?php echo $row1['mid'];?>" />
									
									</div>
									
								</div>	
								<div class="form-group">
									<label for="Email" class="col-sm-2 " >Name</label>
									<div class="col-sm-4">
									<input type="text" class="form-control" readonly="" name="name" id="name" placeholder="Name" value="<?php echo $row1['name'];?>" />
									
									</div>
									
								</div>	
								<div class="form-group">
									<label for="Email" class="col-sm-2 " >DOB</label>
									<div class="col-sm-4">
									<input type="text" class="form-control" readonly="" name="dob" id="dob" placeholder="Name" value="<?php echo $row1['dob'];?>" />
									
									</div>
									<label for="Email" class="col-sm-2 " >Gender</label>
									<div class="col-sm-4">
									<input type="text" class="form-control" readonly="" name="gender" id="gender" placeholder="Name" value="<?php echo $row1['gender'];?>" />
									
									</div>
								</div>	
								<div class="form-group">
									<label for="Email" class="col-sm-2 " >Blood Group</label>
									<div class="col-sm-4">
									<input type="text" class="form-control" readonly="" name="blood" id="blood" placeholder="Name" value="<?php echo $row1['blood'];?>" />
									
									</div>
									
								</div>
								<hr />
								<div class="col-md-12" align="center">
									<h4>Communication Address</h4>
								</div>
								<div class="form-group">
									<label for="Email" class="col-sm-2 " >Address Line 1</label>
									<div class="col-sm-4">
									<input type="text" class="form-control" name="add1" id="add1" placeholder="Address Line 1(Max 35 Chars)" value="<?php echo $row1['add1'];?>" readonly="" />
									
									</div>
									
								</div>	
								<div class="form-group">
									<label for="Email" class="col-sm-2 " >Address Line 2</label>
									<div class="col-sm-4">
									<input type="text" class="form-control" name="add2" id="add2" placeholder="Address Line 2(Max 35 Chars)" value="<?php echo $row1['add2'];?>" readonly="" />
									
									</div>
									
								</div>	
								<div class="form-group">
									<label for="Email" class="col-sm-2 " >State</label>
									<div class="col-sm-4">
									<input type="text" class="form-control" name="state" id="state" placeholder="State" value="<?php echo $row1['state'];?>" readonly="" />
									
									</div>
									
								</div>	
								<div class="form-group">
									<label for="Email" class="col-sm-2 " >District</label>
									<div class="col-sm-4">
									<input type="text" class="form-control" name="dist" id="dist" placeholder="District" value="<?php echo $row1['dist'];?>" readonly=""/>
									
									</div>
									<label for="Pin" class="col-sm-2 " >Pin</label>
									<div class="col-sm-4">
									<input type="number" class="form-control" name="pin" id="pin" placeholder="Pin" value="<?php echo $row1['pin'];?>"readonly="" />
									
									</div>
								</div>	
								<hr />
								<div class="col-md-12" align="center">
									<h4>Contact Details</h4>
								</div>
								
								<div class="form-group">
									<label for="Email" class="col-sm-2 " >E-Mail</label>
									<div class="col-sm-4">
									<input type="email" class="form-control" name="email" id="email" placeholder="E-mail" value="<?php echo $row1['email'];?>" readonly="" />
									
									</div>
									<label for="Mobile No" class="col-sm-2 " >Mobile No.*</label>
									<div class="col-sm-4">
									<input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile No."  value="<?php echo $row1['mobile'];?>" readonly=""/>
									
									</div>
								</div>	
								<div class="col-sm-12" align="center">
								<button type="button"   name="op" id="loginbtn" class="btn btn-lg btn-success">Verify Member</button>
									
												
								</div>
							</form>	
								
							
								
								
								
										
					</div >
					</div > 	
			   </div >
		
		</div >
		
	
	</div >	
	
	
	
</body>
</html>
