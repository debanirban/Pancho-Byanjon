<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta property="og:url" content="https://v4-alpha.getbootstrap.com/layout/grid/">
  <meta property="og:url" content="https://v4-alpha.getbootstrap.com/layout/grid/">
  <link rel="stylesheet" href="bootstrap-social.css">
  <link href='http://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet'  type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'  type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  
  
  <style>
  /* CSS used here will be applied after bootstrap.css */

body { 
 background: url('images/Merged01.png') no-repeat center center fixed; 
 -webkit-background-size: cover;
 -moz-background-size: cover;
 -o-background-size: cover;
 background-size: cover;
}

.panel-default {
 opacity: 0.9;
 margin-top:30px;
}
.form-group.last {
 margin-bottom:0px;
}
div.no-after:after{content:none;}
div:before {
    content: none;
}



 */
#playground-container {
    height: 500px;
    overflow: hidden !important;
    -webkit-overflow-scrolling: touch;
}
body, html{
     height: 100%;
 	background-repeat: no-repeat;
 	font-family: 'Oxygen', sans-serif;
	    background-size: cover;
}

.main{
 	margin:50px 15px;
}

h1.title { 
	font-size: 50px;
	font-family: 'Passion One', cursive; 
	font-weight: 400; 
}

hr{
	width: 10%;
	color: #fff;
}

.form-group{
	margin-bottom: 15px;
}

label{
	margin-bottom: 15px;
}

input,
input::-webkit-input-placeholder {
    font-size: 11px;
    padding-top: 3px;
}

.main-login{
 	background-color: #fff;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

}
.form-control {
    height: auto!important;
padding: 8px 12px !important;
}
.input-group {
    -webkit-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.21)!important;
    -moz-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.21)!important;
    box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.21)!important;
}
#button {
    border: 1px solid #ccc;
    margin-top: 28px;
    padding: 6px 12px;
    color: #666;
    text-shadow: 0 1px #fff;
    cursor: pointer;
    -moz-border-radius: 3px 3px;
    -webkit-border-radius: 3px 3px;
    border-radius: 3px 3px;
    -moz-box-shadow: 0 1px #fff inset, 0 1px #ddd;
    -webkit-box-shadow: 0 1px #fff inset, 0 1px #ddd;
    box-shadow: 0 1px #fff inset, 0 1px #ddd;
    background: #f5f5f5;
    background: -moz-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #f5f5f5), color-stop(100%, #eeeeee));
    background: -webkit-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
    background: -o-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
    background: -ms-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
    background: linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f5f5f5', endColorstr='#eeeeee', GradientType=0);
}
.main-center{
 	margin-top: 30px;
 	margin: 0 auto;
 	max-width: 400px;
    padding: 10px 40px;
	background:#6f7375;
	    color: #FFF;
    text-shadow: none;
	-webkit-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
-moz-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);

}
span.input-group-addon i {
    color: #009edf;
    font-size: 17px;
}

.login-button{
	margin-top: 5px;
}

.login-register{
	font-size: 11px;
	text-align: center;
}

._exp_chart_loader_div
{
	text-align: center;
	position: absolute; 
	z-index: 90; 
	background-color: 
	rgba(204, 204, 204, 0.65);
	width: 400px;
	height: 336px;
	margin-top: -20px;
	display: flex;
	justify-content: center; /* align horizontal */
	align-items: center; /* align vertical */
}

.loading {
  font: 30px/1.5 Monospace;
  color: black;
  -webkit-perspective: 100px;
          perspective: 100px;
}
.loading > span {
  -webkit-animation: flip 2s infinite;
          animation: flip 2s infinite;
  display: inline-block;
  -webkit-transform-origin: 50% 50% -10px;
          transform-origin: 50% 50% -10px;
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
}
.loading > span:nth-child(1) {
  -webkit-animation-delay: 0.1s;
          animation-delay: 0.1s;
}
.loading > span:nth-child(2) {
  -webkit-animation-delay: 0.2s;
          animation-delay: 0.2s;
}
.loading > span:nth-child(3) {
  -webkit-animation-delay: 0.3s;
          animation-delay: 0.3s;
}
.loading > span:nth-child(4) {
  -webkit-animation-delay: 0.4s;
          animation-delay: 0.4s;
}
.loading > span:nth-child(5) {
  -webkit-animation-delay: 0.5s;
          animation-delay: 0.5s;
}
.loading > span:nth-child(6) {
  -webkit-animation-delay: 0.6s;
          animation-delay: 0.6s;
}
.loading > span:nth-child(7) {
  -webkit-animation-delay: 0.7s;
          animation-delay: 0.7s;
}
.loading > span:nth-child(8) {
  -webkit-animation-delay: 0.8s;
          animation-delay: 0.8s;
}
.loading > span:nth-child(9) {
  -webkit-animation-delay: 0.9s;
          animation-delay: 0.9s;
}
.loading > span:nth-child(10) {
  -webkit-animation-delay: 1s;
          animation-delay: 1s;
}
.loading > span:nth-child(11) {
  -webkit-animation-delay: 1.1s;
          animation-delay: 1.1s;
}
.loading > span:nth-child(12) {
  -webkit-animation-delay: 1.2s;
          animation-delay: 1.2s;
}
.loading > span:nth-child(13) {
  -webkit-animation-delay: 1.3s;
          animation-delay: 1.3s;
}
.loading > span:nth-child(14) {
  -webkit-animation-delay: 1.4s;
          animation-delay: 1.4s;
}

@-webkit-keyframes flip {
  to {
    -webkit-transform: rotateX(1turn);
            transform: rotateX(1turn);
  }
}

@keyframes flip {
  to {
    -webkit-transform: rotateX(1turn);
            transform: rotateX(1turn);
  }
}

  </style>
  
  <script type="text/javascript">
  
  var passfilled;
  var unamefilled;
  
  
  function CheckUserLogin($userid, $pwd)
  {
	  ShowLoginLoader();
	  if(unamefilled == true && passfilled == true)
	  {
		  $.ajax({ url: 'api.php',
			 data: {function2call: 'CheckUserLogin', userid: $userid, pwd: $pwd},
			 type: 'post',
			 //dataType: 'json',
			 success: function(output) {
						  var res = jQuery.parseJSON(output);
						  //if(res[0]["COUNT(*)"] > 0)
						  if(res.length > 0)
						  {
							  if(res[0]["UserId"] == $userid)
							  {
									 $.ajax({ url: 'api.php',
									 data: {function2call: 'GetUserSessions', userid: $userid, frname: res[0]["FirstName"]},
									 type: 'post',
									 //dataType: 'json',
									 success: function(output) {
												  //var res = jQuery.parseJSON(output);
												  //if(res[0]["COUNT(*)"] > 0)
												  if(res.length > 0)
												  {
													  window.location.href = "Home.php";
												  }
												  else
													  {
														$('#errDiv').html('Username and Password do not match.');
														unamefilled = false;
														passfilled = false;
													  }
											},
									 error: function ( xhr, status, error) {
												console.log('error', status);
										}
									});
							  }
							  //else
							  //{
								//$('#errDiv').html('Username and Password do not match.');
								//unamefilled = false;
								//passfilled = false;
							  //}
						  }
						  else
							  {
								$('#errDiv').html('Username and Password do not match.');
								unamefilled = false;
								passfilled = false;
							  }
					},
			 error: function ( xhr, status, error) {
						console.log('error', status);
				}
			});
			//HideLoginLoader();
	  }
  }
  
  
  
  function FillUserName()
  {
	  if ($('#username').val() == "")
	  {
		  $('#username').val('Please mention your username');
		  $('#username').css('color', 'red');
		  unamefilled = false;
	  }
	  else
	  {
		  unamefilled = true;
	  }
	  
	  if ($('#password').val() == "")
	  {
		  passfilled = false;
	  }
	  else
	  {
		  passfilled = true;
	  }
  }
  
  function ResetUserName()
  {
	  if (unamefilled == false)
	  {
		$('#username').val('');
		$('#errDiv').html('');
		unamefilled = true;
	  }
	  $('#username').css('color', 'black');
  }
  
  
  function FillPassword()
  {
	  if ($('#password').val() == "")
	  {
		  $('#password').val('Please mention your password');
		  $('#password').css('color', 'red');
		  passfilled = false;
	  }
	  else
	  {
		  passfilled = true;
	  }
	  
	  if ($('#username').val() == "")
	  {
		  unamefilled = false;
	  }
	  else
	  {
		  unamefilled = true;
	  }
  }
  
  function ResetPassword()
  {
	  if (passfilled == false)
	  {
		$('#password').val('');
		$('#errDiv').html('');
		passfilled = true;
	  }
	  $('#password').css('color', 'black');
  }
  
  
  $(document).ready(function(){
	$("#hsps").click(function () {
	 if ($("#password").attr("type")=="password") {
		 $("#password").attr("type", "text");
		 $("#hsps").attr("src", "images/eyec.png");
	 }
	 else{
		 $("#password").attr("type", "password");
		 $("#hsps").attr("src", "images/eye.png");
	 }
 
 });
});

function ShowLoginLoader()
{
	//$('#login_loader_div').css('height', $('#login_div_loader').height());
	
	//$('#login_loader_div').css('width', $('#login_div_loader').width());
	
	$('#login_loader_div').css('left', $('#login_div_loader').position().left);
	
	$('#login_loader_div').show();
}

function HideLoginLoader()
{
	$('#login_loader_div').hide();
}

  </script>
  </head>
<body>
<div class="container" style="margin-top:20px;">    
  <div class="row">
    <div class="col-sm-4" style="background-image:url('PB.png');width: 80px;background-size: contain;background-repeat: no-repeat;height: 80px;margin-left: 350px;">
      
    </div>
    <div class="col-sm-4" style="margin-left: 40px; font-family: 'Lobster';"> 
      <h1>Pancha Byanjon</h1>
    </div>
    
  </div>
</div><br>

<div class="container">
			<div class="row main">
				<div class="main-login main-center pull-right" id="login_div_loader">
				<h5></h5>
					<form class="">
					<!-- creating a loading div -->
					
					
					  <div>
						<div id="login_loader_div" class="_exp_chart_loader_div" style="display: none;">
							<div class="loading"><span>P</span><span>a</span><span>n</span><span>c</span><span>h</span><span>o</span><span>&nbsp;</span><span>B</span><span>y</span><span>a</span><span>n</span><span>j</span><span>o</span><span>n</span>
							</div>
						</div>
					  </div>
					
					
					<!-- end of creation  -->
						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Username</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" onblur="FillUserName();" onfocus="ResetUserName();" name="username" id="username"  placeholder="Enter your Username"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" onblur="FillPassword();" onfocus="ResetPassword();" name="password" id="password"  placeholder="Enter your Password" /><img id="hsps" src="images/eye.png" style="width: 20px;cursor: pointer;margin-left: -10%;margin-top: 2.5%;z-index: 100;position: absolute;"></img>
								</div>
							</div>
						</div>
						<div class="form-group ">
							<a type="button" id="button" class="btn btn-primary btn-lg btn-block login-button" onclick="CheckUserLogin($('#username').val(), $('#password').val())">Sign In</a>
						</div>
						<div id="rotival" class="pull-left">
							New User? <a href="Registration.php" style="color: yellow;">Register</a>
						</div>
						<div class="pull-right">
							<a href="ForgotPassword.php" style="color: yellow;">Forgot Password</a>
						</div>
						<div class="panel-footer" id="errDiv" style="background:#6f7375; color:white;border-top: 0px solid #ddd; padding-top:40px;">
				
						</div>
					</form>
					
				</div>
			
    
	<div class="col-sm-4 pull-left" style="margin-top: 90px;"> 
      <!--<div class="panel panel-danger">-->
		<a class="btn btn-block btn-social btn-twitter">
    <span class="fa fa-twitter"></span> Sign in with Twitter
  </a>
  <br>
  <a class="btn btn-block btn-social btn-google">
    <span class="fa fa-google"></span> Sign in with Google
  </a>
  <br>
  <a class="btn btn-block btn-social btn-facebook">
    <span class="fa fa-facebook"></span> Sign in with Facebook
  </a>
    </div>
  </div>
</div>
			 
</body>
</html>