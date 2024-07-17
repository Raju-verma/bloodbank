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
				
				if(!validateText("phone"))
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
				if(!validateText("ap"))
				{
					return false;
				}
				if(!validateText("an"))
				{
					return false;
				}
				if(!validateText("bp"))
				{
					return false;
				}
				if(!validateText("bn"))
				{
					return false;
				}
				if(!validateText("abp"))
				{
					return false;
				}
				if(!validateText("abn"))
				{
					return false;
				}
				if(!validateText("op"))
				{
					return false;
				}
				if(!validateText("on"))
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
						<h3 class="panel-title" align="center">Add Hospital/Blood Bank</h3>
						</div>
					<div class="panel-body">
					<div class="col-md-12" align="center">
						<h4>Hospital/Blood Bank Details</h4>
					</div>
							<form role="form" id="addmember" class="form-horizontal" action="addhospitaldb.php" method="post">
								<div class="form-group">
									<label for="Email" class="col-sm-2 " >Name</label>
									<div class="col-sm-4">
									<input type="text" class="form-control" name="name" id="name" placeholder="Name" />
									
									</div>
									
								</div>	
							
								<hr />
								<div class="col-md-12" align="center">
									<h4>Communication Address</h4>
								</div>
								<div class="form-group">
									<label for="Email" class="col-sm-2 " >Address Line 1</label>
									<div class="col-sm-4">
									<input type="text" class="form-control" name="add1" id="add1" placeholder="Address Line 1(Max 35 Chars)" />
									
									</div>
									
								</div>	
								<div class="form-group">
									<label for="Email" class="col-sm-2 " >Address Line 2</label>
									<div class="col-sm-4">
									<input type="text" class="form-control" name="add2" id="add2" placeholder="Address Line 2(Max 35 Chars)" />
									
									</div>
									
								</div>	
								<div class="form-group">
									<label for="Email" class="col-sm-2 " >State</label>
									<div class="col-sm-4">
									<input type="text" class="form-control" name="state" id="state" placeholder="State" />
									
									</div>
									
								</div>	
								<div class="form-group">
									<label for="Email" class="col-sm-2 " >District</label>
									<div class="col-sm-4">
									<input type="text" class="form-control" name="dist" id="dist" placeholder="District" />
									
									</div>
									<label for="Pin" class="col-sm-2 " >Pin</label>
									<div class="col-sm-4">
									<input type="number" class="form-control" name="pin" id="pin" placeholder="Pin" />
									
									</div>
								</div>	
								<hr />
								<div class="col-md-12" align="center">
									<h4>Contact Details</h4>
								</div>
								
								<div class="form-group">
									<label for="Email" class="col-sm-2 " >E-Mail</label>
									<div class="col-sm-4">
									<input type="email" class="form-control" name="email" id="email" placeholder="E-mail" />
									
									</div>
									<label for="Mobile No" class="col-sm-2 " >Mobile No.*</label>
									<div class="col-sm-4">
									<input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile No." />
									
									</div>
								</div>	
								<div class="form-group">
									<label for="Email" class="col-sm-2 " >Phone</label>
									<div class="col-sm-4">
									<input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" />
									
									</div>
								</div>
								<hr />
								<div class="col-md-12" align="center">
									<h4>Intial Blood Available</h4>
								</div>
								<div class="form-group">
									<label for="Email" class="col-sm-2 " >A+</label>
									<div class="col-sm-4">
									<input type="number" class="form-control" name="ap" id="ap" placeholder="A+" />
									
									</div>
									<label for="Mobile No" class="col-sm-2 " >A-</label>
									<div class="col-sm-4">
									<input type="number" class="form-control" name="an" id="an" placeholder="A-" />
									
									</div>
								</div>	
								<div class="form-group">
									<label for="Email" class="col-sm-2 " >B+</label>
									<div class="col-sm-4">
									<input type="number" class="form-control" name="bp" id="bp" placeholder="B+" />
									
									</div>
									<label for="Mobile No" class="col-sm-2 " >B-</label>
									<div class="col-sm-4">
									<input type="number" class="form-control" name="bn" id="bn" placeholder="B-" />
									
									</div>
								</div>	
								<div class="form-group">
									<label for="Email" class="col-sm-2 " >AB+</label>
									<div class="col-sm-4">
									<input type="number" class="form-control" name="abp" id="abp" placeholder="AB+" />
									
									</div>
									<label for="Mobile No" class="col-sm-2 " >AB-</label>
									<div class="col-sm-4">
									<input type="number" class="form-control" name="abn" id="abn" placeholder="AB-" />
									
									</div>
								</div>	
								<div class="form-group">
									<label for="Email" class="col-sm-2 " >O+</label>
									<div class="col-sm-4">
									<input type="number" class="form-control" name="op" id="op" placeholder="O+" />
									
									</div>
									<label for="Mobile No" class="col-sm-2 " >O-</label>
									<div class="col-sm-4">
									<input type="number" class="form-control" name="on" id="on" placeholder="O-" />
									
									</div>
								</div>		
								<div class="col-sm-12" align="center">
								<button type="button"   name="op" id="loginbtn" class="btn btn-lg btn-success">Add Hospital</button>
									
												
								</div>
								
							</form>				
					</div>
					</div> 	
			   </div>
		
		</div>
		
	
	</div>	
	
	
</body>
</html>
