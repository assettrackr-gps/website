<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
<title>Login</title>
<meta name="description" content="Contact us for more details on GPS vehicle tracking devices, Equipments engine hours tracking & GPS construction equipment tracking">	


<!--<link rel="shortcut icon" type="image/ico" href="http://www.wabco-auto.com/fileadmin/default/templates/images/favicon.ico">-->
<link href="https://d1iryqxr99wfl4.cloudfront.net/public/v4/css/bootstrap.min.css" rel="stylesheet">
<link href="https://d1iryqxr99wfl4.cloudfront.net/public/v4/css/at-custom.css" rel="stylesheet">
<script src="https://d1iryqxr99wfl4.cloudfront.net/public/v4/js/jquery.js" type="text/javascript"></script>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
</head>

<body class="slider-content"style="background:#f7f7f7"> <!--style="background-image:url(https://www.eicher.in/timthumb?src=uploads/1409908837_banner-01.png&w=912&h=329&a=c);height:0%;background-position:center ;background-repeat: no-repeat;background-size:cover;">-->

	<!-- Navigation -->
			<!-- Brand and toggle get grouped for better mobile display -->
			<!-- Collect the nav links, forms, and other content for toggling -->
			<!-- /.navbar-collapse -->
		<!-- /.container -->

	<div style="background-color:#e42b49">
                        <a href="/"><img src="https://s3.amazonaws.com/assettrackr_images/Logo_Eicher_header.png" alt="Eicher" ></a>
                        <img src="https://s3.amazonaws.com/assettrackr_images/Eicher_FMS_Logo.png" alt="Eicher-fms" style="float:right;"/>
                </div>
	<div class="container cu-container-custom" style="margin-top:15px">
		<br/><br/><br/><br/>
		<div class="row cu-page-content">
			<div class="col-md-4">
			</div>
			<div class="col-md-4" style="width:30%;background:#f9f9f9;border:1px solid;border-color:#d6d6d6;border-radius:5px;box-shadow: 0 0 2px #d8d8d8;" >
				<h1 style="font-weight:bold;text-align:center;font-family: sans-serif; font-size: 24px;"><strong>Welcome</strong></h1>
				<br/>
				<?php	if(isset($mesg) && !empty($mesg)) { ?>
				<strong><span style="color:#00ffff;"><?php echo $mesg ?></span></strong>
				<?php } ?>
				<form action="" method="post" id="login_form">
					<div class="form-texts">
						<input type="text" style="font-family: sans-serif;font-size: 14px;" class="form-text form-control form-control-custom"
							placeholder="Email" name="email" value="">
					</div>
					<div class="form-texts">
						<input type="password" style="font-family: sans-serif; font-size: 14px;"class="form-text  form-control form-control-custom"
							placeholder="Password" name="password" value="">
					</div>
					<div class="form-texts" style="float:left;font-size:12px;font-family:sans-serif;">
							<input type="checkbox" />Remember me
					</div>
							<div class="form-texts"style="float:right">
						<input class="btn-send-message" style="width:100px;background-color:#ff3232;font-family: sans-serif;font-size: 14px;" value="Login" type="submit">
						<!--<input class="btn-send-message" style="width:125px;background-color:#999;font-family: sans-serif;font-size: 14px;" value="Clear" type="reset"/>-->
					</div>
					<div class="form-texts" style="font-size:12px;font-family:sans-serif;margin-top:60px;">
						<a href="#" style="color:#e42b49">Forgot your password?</a>
					</div>
					<div class="form-texts" style="font-size:12px;font-family:sans-serif;margin-top:60px;text-align:center;<?php if(!isset($_POST['email']) || empty($_POST['email'])) { ?>display:none<?php } ?>">
                                                Success
                                        </div>
	
				</form>
							
					
			</div>

		</div>
			<div class="form-texts" style="font-size:12px;font-family:sans-serif;position:fixed;bottom:0;width: 80%;text-align: center;">
                Software Version: v1.0.0
        </div>
	</div>
	<!-- /.container -->
<!--div class="row">
		<div class="col-md-4">
                </div>
		<div class="col-md-4">
		<div style="padding-right:20px;color:white;text-align:center">
              				Powered by AssetTrackr
       				</div>
		</div>		
		<div class="col-md-4">
                </div>
	</div>-->
	<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js" type="text/javascript"></script>
</body>
</html>
