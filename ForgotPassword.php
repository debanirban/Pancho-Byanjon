<html lang="en">
<head>
  <title>Forgot Password</title>
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
  
  function MakeId() 
  {
	  var text = "";
	  var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";

	  for (var i = 0; i < 10; i++)
		text += possible.charAt(Math.floor(Math.random() * possible.length));

	  return text;
	  //$('#errDiv').html(text);
}

  function GenerateRandomNumber()
  {
	  $randnum = Math.floor(100000000000 + Math.random() * 900000000000);
	  //$('#errDiv').html($randnum);
	  return $randnum;
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
				
	var startDt = new Date($savedDtTm);
	//alert(startDt);
	var curDt = new Date(datetime);
	var diff = curDt - startDt;
	
	var linkExpiryCriteria;
	var diffSeconds = diff / 1000;
	var HH = Math.floor(diffSeconds / 3600);
	var MM = Math.floor(diffSeconds % 3600) / 60;

	var formatted = ((HH < 10) ? ("0" + HH) : HH) + ":" + ((MM < 10) ? ("0" + MM) : MM);
	if(HH >= 24)
	{
		linkExpiryCriteria = false;
	}
	else
	{
		linkExpiryCriteria = true;
	}
	
	return linkExpiryCriteria;
  }
  
  function UpdateDBForForgotPass($id, $userid, $dttm)
  {
	$.ajax({ url: 'api.php',
			 data: {function2call: 'UpdateDBForForgotPass', id: $id, userid: $userid, dttm: $dttm},
			 type: 'post',
			 //dataType: 'json',
			 success: function(output) {
						  //var res = jQuery.parseJSON(output);
						  //window.location.href = "Login.php";
					},
			 error: function ( xhr, status, error) {
						console.log('error', status);
				}
			});
	//$linkExpiryCriteria = CalculateDateTimeDifference(dt);
	
  }
  
  function CreateSendMail($emailid)
  {
	  $("#cartitemsdiv").show();
		$("#cartitemcontainer").show();
		
	  $randnum = GenerateRandomNumber();
	  $text = MakeId();
	  $genId = $randnum + $text;
	  //$('#errDiv').html($genId);
	  $mailStr = "http://localhost:81/DBConn/ResetPassword?ID=" + $genId;
	  $dttm = GetCurrentDateTime();
	  $.ajax({ url: 'api.php',
         data: {function2call: 'CheckForUserData', emailid: $emailid},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
			 if(output != "")
			 {
                      var res = jQuery.parseJSON(output);
					  if(res.length > 0)
					  {
						  $frname = res[0]["FirstName"];
						  $lsame = res[0]["LastName"];
						  $userid = res[0]["UserId"];
						  UpdateDBForForgotPass($genId, $userid, $dttm)
						  $.ajax({ url: 'api.php',
								 data: {function2call: 'SendEmailToResetPass', frname: $frname, lsame: $lsame, tomail: $emailid, mailStr: $mailStr, userid: $userid},
								 type: 'post',
								 //dataType: 'json',
								 success: function(output) {
											  $("#cartitemsdiv").hide();
											  $("#cartitemcontainer").hide();
											  $('#infoDiv').html('A password reset link has been sent to the address: ' + $emailid);
											  window.setTimeout(function(){
												window.location.href = "Login.php";
											  }, 2000);
											  
										},
								 error: function ( xhr, status, error) {
											console.log('error', status);
									}
								});
					  }
					  else
					  {
						  //$('#email').css('color', 'green');
						  //$('#errDiv').html('');
						  //$('#errDiv').html('No such email id exists.');
					  }
			 }
		 },
		 error: function ( xhr, status, error) {
					console.log('error', arguments);
			}
		});
  }
  function CheckIfEmailExists($emailid)
  {
	  $.ajax({ url: 'api.php',
         data: {function2call: 'CheckIfEmailExists', emailid: $emailid},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
			 if(output != "")
			 {
                      var res = jQuery.parseJSON(output);
					  if(res[0]["COUNT(*)"] > 0)
					  {
						  CreateSendMail($emailid);
					  }
					  else
					  {
						  $('#email').css('color', 'green');
						  $('#errDiv').html('');
						  $('#errDiv').html('No such email id exists.');
					  }
			 }
		 },
		 error: function ( xhr, status, error) {
					console.log('error', arguments);
			}
		});
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
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<a type="button" id="button" class="btn btn-primary btn-lg btn-block login-button" onclick="CheckIfEmailExists($('#email').val());">Continue</a>
						</div>
						<div class="panel-footer" id="errDiv" style="background:#6f7375; color:white;border-top: 0px solid #ddd;">
				
						</div>
					</form>
				</div>
			</div>
			
		</div>
		
		<div class="panel-footer" id="infoDiv" style="background:rgba(111, 115, 117, 0); color:black; text-align: center; border-top: 0px solid #ddd;">
				
		</div>
		<!--<input type=button onclick="UpdateDBForForgotPass();" value="Click Me for Number"></input>-->
		<!--<input type=button onclick="CreateSendMail($('#email').val());" value="Click Me for Alphabets"></input>-->
			<div class='overlay' style="display:none;" id="cartitemcontainer">
				<span id="cartitemsdiv" style="width: auto;height: auto; color: beige;position: absolute;padding: 10px; margin-top: 15%;margin-left: 40%;"><img src="loader_logo.gif"></img></span>
			  </div>
</body>
</html>