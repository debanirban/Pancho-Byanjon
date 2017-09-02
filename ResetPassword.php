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
  <script src="moment.js"></script>
  
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

  var pfilled;
  var cpfilled;
  var idreset;
  var psmatch;
  var g_id;

  function RegisterUser($userid, $pwd, $loggedin, $sessval, $frname, $lsame, $emailid)
  {
	  if(checkduplicates == false && checkemailduplicates == false && fnamefilled == true && lnamefilled == true && unamefilled == true && emailfilled == true && pfilled == true && cpfilled == true)
	  {
		  $.ajax({ url: 'api.php',
			 data: {function2call: 'RegisterUser', userid: $userid, pwd: $pwd, loggedin: $loggedin, sessval: $sessval, frname: $frname, lsame: $lsame, emailid: $emailid},
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
						  alert('Email sent successfully');
					},
			 error: function ( xhr, status, error) {
						console.log('error', status);
				}
			});
  }
  
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
			  psmatch = false;
		  }
		  else
		  {
			  psmatch = true;
			  $('#errDiv').html('');
		  }
	  }
  }
  
  
  function GetCurrentDateTime()
  {
	var currentdate = new Date(); 
    var datetime = currentdate.getDate() + "/"
                + (currentdate.getMonth()+1)  + "/" 
                + currentdate.getFullYear() + " "  
                + currentdate.getHours() + ":"  
                + currentdate.getMinutes() + ":" 
                + currentdate.getSeconds();
	
	return datetime;		
  }
  
  function CalculateDateTimeDifference($savedDtTm)
  {
	var currentdate = new Date(); 
    var datetime = currentdate.getDate() + "/"
                + (currentdate.getMonth()+1)  + "/" 
                + currentdate.getFullYear() + " "  
                + currentdate.getHours() + ":"  
                + currentdate.getMinutes() + ":" 
                + currentdate.getSeconds();
				
				//alert(datetime);
				
	$dt_diff = moment.utc(moment(datetime,"DD/MM/YYYY HH:mm:ss").diff(moment($savedDtTm,"DD/MM/YYYY HH:mm:ss"))).format("HH:mm:ss");
	$dt_hr = $dt_diff.split(':');
	//alert($dt_hr[0]);
	//alert($savedDtTm);
	if($dt_hr[0] >= 24)
	{
		linkExpiryCriteria = false;
	}
	else
	{
		linkExpiryCriteria = true;
	}
	
	//alert($test);
	//linkExpiryCriteria = true;
	return linkExpiryCriteria;
  }
  
  
  $(document).ready(function(){
	$id = getUrlParameter('ID');
	g_id = $id;
	
	$.ajax({ url: 'api.php',
			 data: {function2call: 'GetResetValue', id: $id},
			 type: 'post',
			 //dataType: 'json',
			 success: function(output) {
						  var res = jQuery.parseJSON(output);
						  if(res.length > 0)
						  {
							  idreset = res[0]["UserId"];
							  $dt_diff = CalculateDateTimeDifference(res[0]["RequestTime"]);
							  //alert($dt_diff);
							  if($dt_diff == false)
							  {
								  $('#infoDiv').show();
								  $('#resetcontainer').hide();
							  }
						  }
						  else
						  {
							  $('#passResetDiv').show();
							  $('#resetcontainer').hide();
						  }
						  //window.location.href = "Login.php";
						  //alert('Email sent successfully');infoDiv
					},
			 error: function ( xhr, status, error) {
						console.log('error', status);
				}
			});
			
			
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
  
var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};

function DeleteResetValue()
{
	$gid = g_id;
	$.ajax({ url: 'api.php',
			 data: {function2call: 'DeleteResetValue', gid: $gid},
			 type: 'post',
			 //dataType: 'json',
			 success: function(output) {
					},
			 error: function ( xhr, status, error) {
						console.log('error', status);
				}
	});
}

function UpdateResetRecord($ps_reset)
{
	$("#cartitemsdiv").show();
	$("#cartitemcontainer").show();
	$id_reset = idreset;
	if(psmatch == true && cpfilled == true && pfilled == true)
	{
		$.ajax({ url: 'api.php',
			 data: {function2call: 'UpdateResetRecord', ps_reset: $ps_reset, id_reset: $id_reset},
			 type: 'post',
			 //dataType: 'json',
			 success: function(output) {
						  //var res = jQuery.parseJSON(output);
						  //window.location.href = "Login.php";
						  //alert('Email sent successfully');
						  DeleteResetValue();
						  $("#cartitemsdiv").hide();
						  $("#cartitemcontainer").hide();
						  $('#psinfoDiv').html('');
						  $('#psinfoDiv').html('Password has been successfully changed.');
						  $('#psinfoDiv').show();
						  window.setTimeout(function(){
												window.location.href = "Login.php";
											  }, 2000);
					},
			 error: function ( xhr, status, error) {
						console.log('error', status);
				}
			});
	}
}
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

<div class="container" id="resetcontainer">
			<div class="row main">
				<div class="main-login main-center">
				<h5></h5>
					<form class="">
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
							<a type="button" id="button" class="btn btn-primary btn-lg btn-block login-button" onclick="UpdateResetRecord($('#password').val())">Reset Password</a>
						</div>
						<div class="panel-footer" id="errDiv" style="background:#6f7375; color:white;border-top: 0px solid #ddd;">
							
						</div>
					</form>
				</div>
			</div>
			
		</div>
		<div class='overlay' style="display:none;" id="cartitemcontainer">
				<span id="cartitemsdiv" style="width: auto;height: auto; color: beige;position: absolute;padding: 10px; margin-top: 15%;margin-left: 40%;"><img src="loader_logo.gif"></img></span>
			  </div>
		<div class="panel-footer" id="psinfoDiv" style="background:rgba(111, 115, 117, 0); color:black; display: none; text-align: center; border-top: 0px solid #ddd; width: 500px; text-align: justify; margin-left: 35%; margin-top: -2%;">
				
		</div>
		
		<div class="panel-footer" id="passResetDiv" style="background:rgba(111, 115, 117, 0); color:black; display: none; text-align: center; border-top: 0px solid #ddd; width: 500px; text-align: justify; margin-left: 35%; margin-top: 10%;">
				This link seems to have already been used to reset the password. Please visit the <a href="ForgotPassword.php" style="color: #337ab7;">Forgot Password</a> page to initiate the request for password reset once again. Please remember that the link to reset the password sent to your email expires in 24 hours.
		</div>
		
		<div class="panel-footer" id="infoDiv" style="background:rgba(111, 115, 117, 0); color:black; display: none; text-align: center; border-top: 0px solid #ddd; width: 500px; text-align: justify; margin-left: 35%; margin-top: 10%;">
				The link you have visited has expired. Please visit the <a href="ForgotPassword.php" style="color: #337ab7;">Forgot Password</a> page to initiate the request for password reset. Please remember that the link to reset the password sent to your email expires in 24 hours.
		</div>
			 
</body>
</html>