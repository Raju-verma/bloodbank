<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Getting Started with bootstrap</title>
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
			
				if(!validateText("email"))
				{
					return false;
				}
				if(!validateText("password"))
				{
					return false;
				}
				$("form#login").submit();
			}	
			);
			$("#register").click(function(){
			
				
				$("form#registerform").submit();
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
			<a class="navbar-brand" href="#">Indore Blood Bank</a>
			 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-abc-navbar-collapse-1">
			 <span class="sr-only">Toggle navigation</span>
			 <span class="icon-bar"></span>
			 
			 <span class="icon-bar"></span>
			 <span class="icon-bar"></span> 
			 </button> 
		</div>
		
		 <div class="collapse navbar-collapse" id="bs-abc-navbar-collapse-1"> 
		<ul class="nav navbar-nav">
			<li><a href="first.html">Home</a></li>
			<li><a class="page-scroll" href="#contact">Contact Us</a></li>
			<li><a class="page-scroll" href="#about">About Us</a></li>
			<li><a class="page-scroll" href="#login" >Login</a></li>
			
		</ul>
		
		</div>	
		
		</div>
	
	</nav>
	
	<div class="container-fluid">
		<div class="row">
			<div class="jumbotron no-padding no-margin">
			
				<img src="img/1773584.jpg" class="img-responsive no-padding"   />
						
			</div>
		</div>
	</div>
	<hr />
	<hr />
			
	<!--Login -->
			
	 <section  id="login"  class="success" >
        <div class="container">
            <div class="row">
               <div class="col-md-6">
			   		<div class="panel panel-default">
						<div class="panel-heading">
						<h4 class="panel-title">Register</h4>
						</div>
					<div class="panel-body" align="center">
								<br /><br /><br />
								<form action="register.php" id="registerform">
								<button type="button" id="register" class="btn btn-primary btn-lg" >Register Yourself</button>				</form>
								
								<br /><br />
					</div>
					</div> 	
			   </div>
			   <div class="col-md-6">
			   		<div class="panel panel-default">
						<div class="panel-heading">
						<h4 class="panel-title">Login</h4>
						</div>
					<div class="panel-body">
							<form role="form" id="login" class="form-horizontal" action="checklogin.php" method="post">
								<div class="form-group">
									<label for="Email" class="col-sm-4">UserName</label>
									<div class="col-sm-8">
									<input type="text" class="form-control" name="username" id="email" placeholder="Email" />
									</div>
								</div>	
								
								<div class="form-group">
								
									<label for="Password" class="col-sm-4">Password</label>
									<div class="col-sm-8">
									
									<input type="password" class="form-control" name="pass" id="password" placeholder="Password" />
									</div>
								</div>
								
								<div class="col-sm-8 col-xs-offset-4">
								<button type="button"   name="op" id="loginbtn" class="btn btn-lg btn-success">Login</button>
									
								<a href="" class="btn  btn-outline" >Forgot Password</a>					
								</div>
								
							</form>				
					</div>
					</div> 	
			   </div>
            </div>
        </div>
    </section >
	
	
	<!--ABout Football Club-->
	<section  id="about"  class="success" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy customization.</p>
                </div>
                <div class="col-lg-4">
                    <p>Whether you're a student looking to showcase your work, a professional looking to attract clients, or a graphic artist looking to share your projects, this template is the perfect starting point!</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="#" class="btn btn-lg btn-outline">
                        <i class="fa fa-download"></i> Download Theme
                    </a>
                </div>
            </div>
        </div>
    </section >


	<section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Contact Me</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
					<div class="panel panel-default">
						<div class="panel-heading">
						<h4 class="panel-title">Leave us a Message</h4>
						</div>
						<div class="panel-body">
				
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidate class="form-horizontal">
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label class="col-sm-2 control-label" >Name</label>
								<div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
								</div>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label class="col-sm-2 control-label">Email Address</label>
                                <div class="col-sm-10">
								<input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
								</div>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label class="col-sm-2 control-label">Phone Number</label>
                                <div class="col-sm-10">
								<input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
								</div>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label class="col-sm-2 control-label">Message</label>
                                <div class="col-sm-10">
								<textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
								</div>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div  align="center" class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Send</button>
                            </div>
                        </div>
                    </form>
					</div>
					</div>
                </div>
            </div>
        </div>
    </section>
	
</body>
</html>
