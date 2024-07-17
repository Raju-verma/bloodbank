<?php

	include "connection.php";
	$sql4="select * from hospitalinfo ";
	$rs4=mysql_query($sql4);
	

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
			
				if(!validateText("txtusername"))
				{
					return false;
				}
				if(!validateText("txtpassword"))
				{
					return false;
				}
				$("form#login").submit();
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
						<h3 class="panel-title" align="center">Hospital/Blood Bank List</h3>
						</div>
					<div class="panel-body" align="center">
							
							<div class="table-responsive">
										<table class="table table-hover table-bordered">
											<tr>
												<th>Hospital ID</th>
												<th>Name</th>
												<th>A+</th>
												<th>A-</th>
												<th>B+</th>
												<th>B-</th>
												<th>AB+</th>
												<th>AB-</th>
												<th>O+</th>
												<th>O-</th>
												
											</tr>
											<?php
											while($row4=mysql_fetch_array($rs4))
											{
											?>
												<tr>
												<td><?php echo $row4['hid'];?></td>
												<td><?php echo $row4['name'];?></td>
												<td><?php echo $row4['ap'];?></td>
												<td><?php echo $row4['an'];?></td>
												<td><?php echo $row4['bp'];?></td>
												<td><?php echo $row4['bn'];?></td>
												<td><?php echo $row4['abp'];?></td>
												<td><?php echo $row4['abn'];?></td>
												<td><?php echo $row4['op'];?></td>
												<td><?php echo $row4['on'];?></td>
												
												
																							
											<?php
											}
											?>
										</table> 
									</div>
							
					</div>
					</div> 	
			   </div>
		
		</div>
	
	</div>	
	
	
</body>
</html>
