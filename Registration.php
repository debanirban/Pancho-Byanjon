<html lang="en">
<head>
  <title>Registration</title>
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

.maindivreg{
	margin-top:20px;
}

.divcolsm4{
	background-image:url('PB.png');
	width: 80px;
	background-size: contain;
	background-repeat: no-repeat;
	height: 80px;
	margin-left: 350px;
}

.divcolsm4font{
	margin-left: 40px; 
	font-family: 'Lobster';
}

.condivreg{
	position: absolute;
	/* margin-left: 0px; */
	top: 50%;
	left: 20%;
	transform: translate(-50%,-50%);
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

.overlay {
    position: fixed;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    background: rgba(51,51,51,0.7);
    z-index: 10;
  }
  </style>
  
  <script type="text/javascript">
  
  var checkduplicates;
  var checkemailduplicates;
  var fnamefilled;
  var lnamefilled;
  var unamefilled;
  var emailfilled;
  var phonefilled;
  var pfilled;
  var cpfilled;
  
  function CheckforUserName($userid)
  {
	  $.ajax({ url: 'api.php',
         data: {function2call: 'CheckforUserName', userid: $userid},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
                      var res = jQuery.parseJSON(output);
					  if(res[0]["COUNT(*)"] > 0)
					  {
						  $('#username').css('color', 'red');
						  $('#errDiv').html('The username already exists.');
						  checkduplicates = true;
					  }
					  else
					  {
						  $('#username').css('color', 'green');
						  $('#errDiv').html('');
						  checkduplicates = false;
					  }
		 },
		 error: function ( xhr, status, error) {
					console.log('error', arguments);
			}
		});
  }
  
  
  function CheckforEmail($emailid)
  {
	  $.ajax({ url: 'api.php',
         data: {function2call: 'CheckforEmail', emailid: $emailid},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
                      var res = jQuery.parseJSON(output);
					  if(res[0]["COUNT(*)"] > 0)
					  {
						  $('#email').css('color', 'red');
						  $('#errDiv').html('The email id already exists.');
						  checkemailduplicates = true;
					  }
					  else
					  {
						  $('#email').css('color', 'green');
						  $('#errDiv').html('');
						  checkemailduplicates = false;
					  }
		 },
		 error: function ( xhr, status, error) {
					console.log('error', arguments);
			}
		});
  }
  
  function RegisterUser($userid, $pwd, $loggedin, $sessval, $frname, $lsame, $emailid, $phone)
  {
	  if(checkduplicates == false && checkemailduplicates == false && fnamefilled == true && lnamefilled == true && unamefilled == true && emailfilled == true && pfilled == true && cpfilled == true && phonefilled == true)
	  {
		  $("#cartitemsdiv").show();
		  $("#cartitemcontainer").show();
		  $.ajax({ url: 'api.php',
			 data: {function2call: 'RegisterUser', userid: $userid, pwd: $pwd, loggedin: $loggedin, sessval: $sessval, frname: $frname, lsame: $lsame, emailid: $emailid, phone: $phone},
			 type: 'post',
			 //dataType: 'json',
			 success: function(output) {
						  //var res = jQuery.parseJSON(output);
						  SendEmail();
						  //window.location.href = "Login.php";
					},
			 error: function ( xhr, status, error) {
						console.log('error', status);
				}
			});
	  }
  }
  
  
  function SendEmail()
  {
	  $frname = $('#fname').val();
	  $lsame = $('#lname').val();
	  $tomail = $('#email').val();
	  $.ajax({ url: 'api.php',
			 data: {function2call: 'SendEmail', frname: $frname, lsame: $lsame, tomail: $tomail},
			 type: 'post',
			 //dataType: 'json',
			 success: function(output) {
						  //var res = jQuery.parseJSON(output);
						  //window.location.href = "Login.php";
						  //alert('Email sent successfully');
						  $("html, body").animate({ scrollTop: $(document).height() }, 1000);
						  $('#infoDiv').html('Registration successful. An email has also been sent to the address: ' + $tomail);
						  $("#cartitemsdiv").hide();
						  $("#cartitemcontainer").hide();
						  $('#fname').val('');
						  $('#lname').val('');
						  $('#email').val('');
						  $('#username').val('');
						  $('#password').val('');
						  $('#confirm').val('');
						window.setTimeout(function(){
												window.location.href = "Login.php";
											  }, 3000);
					},
			 error: function ( xhr, status, error) {
						console.log('error', status);
				}
			});
  }
  
  
  function FillFirstName()
  {
	  if ($('#fname').val() == "")
	  {
		  $('#fname').val('Please mention your first name');
		  $('#fname').css('color', 'red');
		  fnamefilled = false;
	  }
	  else
	  {
		  fnamefilled = true;
	  }
  }
  
  function ResetFirstName()
  {
	  if (fnamefilled == false)
	  {
		$('#fname').val('');
	  }
	  $('#fname').css('color', 'black');
  }
  
  
  function FillLastName()
  {
	  if ($('#lname').val() == "")
	  {
		  $('#lname').val('Please mention your last name');
		  $('#lname').css('color', 'red');
		  lnamefilled = false;
	  }
	  else
	  {
		  lnamefilled = true;
	  }
  }
  
  function ResetLastName()
  {
	  if (lnamefilled == false)
	  {
		$('#lname').val('');
	  }
	  $('#lname').css('color', 'black');
  }
  
  function FillUserName()
  {
	  if ($('#username').val() == "")
	  {
		  $('#username').val('Please choose your username');
		  $('#username').css('color', 'red');
		  unamefilled = false;
	  }
	  else
	  {
		  unamefilled = true;
	  }
  }
  
  function ResetUserName()
  {
	  if (unamefilled == false)
	  {
		$('#username').val('');
	  }
	  $('#username').css('color', 'black');
	  $('#errDiv').html('');
  }
  
  function FillEmail()
  {
	  if ($('#email').val() == "")
	  {
		  $('#email').val('Please mention your email');
		  $('#email').css('color', 'red');
		  emailfilled = false;
	  }
	  else
	  {
		  emailfilled = true;
	  }
  }
  
  function ResetEmail()
  {
	  if (emailfilled == false)
	  {
		$('#email').val('');
	  }
	  $('#email').css('color', 'black');
	  $('#errDiv').html('');
  }
  
  //for phone
  
  function FillPhone()
  {
	  if ($('#phone').val() == "")
	  {
		  $('#phone').val('Please mention your phone');
		  $('#phone').css('color', 'red');
		  phonefilled = false;
	  }
	  else
	  {
		  phonefilled = true;
	  }
	  
	  if($('#phone').val().length > 10 || $('#phone').val().length < 10)
	  {
		  $('#phone').val('Not a correct phone number');
		  $('#phone').css('color', 'red');
		  phonefilled = false;
	  }
	  else
	  {
		  phonefilled = true;
	  }
  }
  
  function ResetPhone()
  {
	  if (phonefilled == false)
	  {
		$('#phone').val('');
	  }
	  $('#phone').css('color', 'black');
	  $('#errDiv').html('');
  }
  
  //end phone
  
  function FillPassword()
  {
	  if ($('#password').val() == "")
	  {
		  $('#password').val('Please create a password');
		  $('#password').css('color', 'red');
		  pfilled = false;
	  }
	  else
	  {
		  pfilled = true;
	  }
  }
  
  function ResetPassword()
  {
	  if (pfilled == false)
	  {
		$('#password').val('');
	  }
	  $('#password').css('color', 'black');
	  $('#errDiv').html('');
  }
  
  
  function FillCPassword()
  {
	  if ($('#confirm').val() == "")
	  {
		  $('#confirm').val('Please confirm your password');
		  $('#confirm').css('color', 'red');
		  cpfilled = false;
	  }
	  else
	  {
		  cpfilled = true;
	  }
  }
  
  function ResetCPassword()
  {
	  if (cpfilled == false)
	  {
		$('#confirm').val('');
	  }
	  $('#confirm').css('color', 'black');
	  $('#errDiv').html('');
  }
  
  function CheckPasswordMatch()
  {
	  if($('#password').val() != "" && $('#confirm').val() != "")
	  {
		  if($('#password').val() != $('#confirm').val())
		  {
			  $('#errDiv').html('Passwords do not match');
		  }
		  else
		  {
			  $('#errDiv').html('');
		  }
	  }
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
		 
		 
		 $("#hspsc").click(function () {
			 if ($("#confirm").attr("type")=="password") {
				 $("#confirm").attr("type", "text");
				 $("#hspsc").attr("src", "images/eyec.png");
			 }
			 else{
				 $("#confirm").attr("type", "password");
				 $("#hspsc").attr("src", "images/eye.png");
			 }
		 
		 });
});
  
  </script>
  </head>
<body>
<div class="container maindivreg">    
  <div class="row">
    <div class="col-sm-4 divcolsm4">
      
    </div>
    <div class="col-sm-4 divcolsm4font"> 
      <h1>Pancha Byanjon</h1>
    </div>
    
  </div>
</div><br>

<div class="container">
			<div class="row main">
				<div class="main-login main-center">
				<h5></h5>
					<form class="">
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">First Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" onfocus="ResetFirstName();" onblur="FillFirstName();" name="fname" id="fname"  placeholder="Enter your First Name"/>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Last Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" onfocus="ResetLastName();" onblur="FillLastName();" name="lname" id="lname"  placeholder="Enter your Last Name"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" onblur="FillEmail(); CheckforEmail($('#email').val());" onfocus="ResetEmail();" name="email" id="email"  placeholder="Enter your Email"/>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label for="phone" class="cols-sm-2 control-label">Your Phone</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
									<span class="input-group-addon">+91</span><input type="text" class="form-control" onblur="FillPhone();" onfocus="ResetPhone();" name="phone" id="phone"  placeholder="Enter your Phone Number"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Username</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" onblur="FillUserName(); CheckforUserName($('#username').val());" onfocus="ResetUserName();" name="username" id="username"  placeholder="Enter your Username"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" onblur="CheckPasswordMatch(); FillPassword();" onfocus="ResetPassword();" name="password" id="password"  placeholder="Enter your Password"/><img id="hsps" src="images/eye.png" style="width: 20px;cursor: pointer;margin-left: -10%;margin-top: 2.5%;z-index: 100;position: absolute;"></img>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" onblur="CheckPasswordMatch(); FillCPassword();" onfocus="ResetCPassword();" name="confirm" id="confirm"  placeholder="Confirm your Password"/><img id="hspsc" src="images/eye.png" style="width: 20px;cursor: pointer;margin-left: -10%;margin-top: 2.5%;z-index: 100;position: absolute;"></img>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<a type="button" id="button" class="btn btn-primary btn-lg btn-block login-button" onclick="RegisterUser($('#username').val(), $('#password').val(), 'N', '', $('#fname').val(), $('#lname').val(), $('#email').val(), $('#phone').val())">Register</a>
						</div>
						<div class="panel-footer" id="errDiv" style="background:#6f7375; color:white;border-top: 0px solid #ddd;">
				
						</div>
					</form>
				</div>
			</div>
			
		</div>
		
		<div class="panel-footer" id="infoDiv" style="background:rgba(111, 115, 117, 0); color:black; text-align: center; border-top: 0px solid #ddd; margin-top: -40px;">
				
		</div>
		
		<div class='overlay' style="display:none;" id="cartitemcontainer">
	<span id="cartitemsdiv" style="width: auto;height: auto; color: beige;position: absolute;padding: 10px; margin-top: 15%;margin-left: 40%;"><img src="loader_logo.gif"></img></span>
  </div>
			 
</body>
</html>