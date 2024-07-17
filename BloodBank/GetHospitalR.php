<?php
	
	include "connection.php";
	$sql1="select * from hospitalinfo";
	$rs1=mysql_query($sql1);
	
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
	<div class="container">
		
		<div class="row">
		
			
			   <div class="col-md-12">
			   		<div class="panel panel-default">
						<div class="panel-heading">
						<h3 class="panel-title" align="center">Remove Hospital</h3>
						</div>
					<div class="panel-body">
					<div class="col-md-12" align="center">
						<h4>List of Hospital</h4>
					</div>
							<form role="form" id="membersch" class="form-horizontal" action="removeHospital.php" method="post">
								<div class="form-group">
									<div class="col-md-3">
									</div>
									<label for="Member ID" class="col-sm-2 " >Hospital Name</label>
									<div class="col-sm-4">
									
									<select class="form-control" name="s1" id="s1">
									<?php 
									while($row1=mysql_fetch_array($rs1))
									{
									?>
										<option value="<?php echo $row1['hid'];?>"><?php echo $row1['name'];?></option>
									<?php
									}
									?>
									</select>
									
									</div>
									
								</div>	
								
								
								<div class="col-sm-12" align="center">
								<button type="button"   name="op" id="loginbtn" class="btn btn-lg btn-success">Remove Hospital</button>
									
												
								</div>
							</form>			
					</div>
					</div> 	
			   </div>
		
		</div>
		
	
	</div>	
	
	
</body>
</html>
