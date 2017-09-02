<?php 
session_start();
//$_SESSION["user_name"] = "anirbandeb";
if (!isset($_SESSION['user_name']) && empty($_SESSION['user_name']))
{
	 header("Location: http://localhost:81/DBConn/Login"); /* Redirect browser */
	 exit();
}
?>
<!DOCTYPE html>
<html>
<title>My Profile</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet'  type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'  type='text/css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta property="og:url" content="https://v4-alpha.getbootstrap.com/layout/grid/">
<meta property="og:url" content="https://v4-alpha.getbootstrap.com/layout/grid/">
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
<script src="moment.js"></script>
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
</style>
<body class="w3-theme-l5">

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="Home.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4" style="font-family:Lobster;" title="Home - Pancho Byanjon"><i class="fa fa-home w3-margin-right"></i>Pancho Byanjon <img src="PB.png" style="height: 25px;margin-left: 12px; margin-top: -7px;"></a>
  <!--<a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="News"><i class="fa fa-globe"></i></a>-->
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="My Cart"><i class="fa fa-shopping-cart"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Feedback"><i class="fa fa-handshake-o"></i></a>
  <div class="w3-dropdown-hover w3-hide-small" id="notif_div">
    <button class="w3-button w3-padding-large" title="Notifications"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green" id=notifications_count>3</span></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px" id="notifications_list">
      <!--<a href="#" class="w3-bar-item w3-button">One new friend request</a>
      <a href="#" class="w3-bar-item w3-button">John Doe posted on your wall</a>
      <a href="#" class="w3-bar-item w3-button">Jane likes your post</a>-->
	  <span class="w3-bar-item w3-button">Please go through these notifications</span>
	  <span class="w3-bar-item w3-button">Just open the list</span>
	  <span class="w3-bar-item w3-button">And all is done</span>
    </div>
  </div>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account"><img src="images/avatar2.png" class="w3-circle" style="height:25px;width:25px" alt="Avatar"></a>
 </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
</div>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card-2 w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center">My Profile</h4>
         <p class="w3-center"><img src="images/avatar3.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i><span id="profile_name">Designer, UI</span></p>
         <p><i class="fa fa-user-circle fa-fw w3-margin-right w3-text-theme"></i><span id="user_name">London, UK</span></p>
         <p><i class="fa fa-envelope fa-fw w3-margin-right w3-text-theme"></i><span id="user_email">April 1, 1988</span></p>
        </div>
      </div>
      <br>
      
      <!-- Accordion -->
      <div class="w3-card-2 w3-round">
        <div class="w3-white">
          <!--<button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-heart fa-fw w3-margin-right"></i> <span id="my_fav">My Favourites</span></button>-->
		  <button onclick="GetDetails('my_fav')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-heart fa-fw w3-margin-right"></i> <span id="my_fav">My Favourites</span></button>
          <div id="Demo1" class="w3-hide w3-container">
            <p>Some text..</p>
          </div>
          <!--<button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-shopping-bag fa-fw w3-margin-right"></i> <span id="my_orders">My Orders</span></button>-->
		  <button onclick="GetDetails('my_orders')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-shopping-bag fa-fw w3-margin-right"></i> <span id="my_orders">My Orders</span></button>
          <div id="Demo2" class="w3-hide w3-container">
            <p>Some other text..</p>
          </div>
          <!--<button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-address-card fa-fw w3-margin-right"></i> <span id="my_addresses">My Addresses</span></button>-->
		  <button onclick="GetDetails('my_addresses')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-address-card fa-fw w3-margin-right"></i> <span id="my_addresses">My Addresses</span></button>
          <div id="Demo3" class="w3-hide w3-container">
         <div class="w3-row-padding">
         <br>
           <div class="w3-half">
             <img src="/w3images/lights.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/mountains.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/forest.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/fjords.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
         </div>
          </div>
		  <button onclick="GetDetails('change_password')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-edit fa-fw w3-margin-right"></i> <span id="change_password">Change Password</span></button>
          <div id="Demo4" class="w3-hide w3-container">
            <p>Some other text..</p>
          </div>
		  <button onclick="GetDetails('my_feedback')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-handshake-o fa-fw w3-margin-right"></i> <span id="my_feedback">My Feedbacks</span></button>
          <div id="Demo5" class="w3-hide w3-container">
            <p>Some other text..</p>
          </div>
		  <button onclick="GetDetails('my_reviews')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-thumbs-o-up fa-fw w3-margin-right"></i> <span id="my_reviews">My Reviews</span></button>
          <div id="Demo6" class="w3-hide w3-container">
            <p>Some other text..</p>
          </div>
        </div>      
      </div>
      <br>
      
      <!-- Interests --> 
      <div class="w3-card-2 w3-round w3-white w3-hide-small">
        <div class="w3-container">
          <p>Recent Orders</p>
		  <div id="recentorders">
			  <p>
				<span class="w3-tag w3-small w3-theme-d5">News</span>
			  </p>
			  <p>
				<span class="w3-tag w3-small w3-theme-d4">W3Schools</span>
			  </p>
		   </div>
        </div>
      </div>
      <br>
      
      <!-- Alert Box -->
      <!--<div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
        <span onclick="this.parentElement.style.display='none'" class="w3-button w3-theme-l3 w3-display-topright">
          <i class="fa fa-remove"></i>
        </span>
        <p><strong>Hey!</strong></p>
        <p>People are looking at your profile. Find out who.</p>
      </div>-->
    
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="w3-col m7">
    
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card-2 w3-round w3-white">
            <div class="w3-container w3-padding">
              <h6 class="w3-opacity">Snapshot: My Expenditure</h6>
              <!--<p contenteditable="true" class="w3-border w3-padding">Status: Feeling Blue</p>
              <button type="button" class="w3-button w3-theme"><i class="fa fa-pencil"></i>  Post</button> -->
            </div>
          </div>
        </div>
      </div>
      
      <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
        <!--<img src="/w3images/avatar2.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">-->
        <!--<span class="w3-right w3-opacity">1 min</span>-->
        <h4 id="topic_header">John Doe</h4><br>
        <hr class="w3-clear">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <div class="w3-row-padding" style="margin:0 -16px">
            <div class="w3-half">
              <img src="/w3images/lights.jpg" style="width:100%" alt="Northern Lights" class="w3-margin-bottom">
            </div>
            <div class="w3-half">
              <img src="/w3images/nature.jpg" style="width:100%" alt="Nature" class="w3-margin-bottom">
          </div>
        </div>
        <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button> 
        <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button> 
      </div>
      
      <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
        <img src="images/setting2.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <!--<span class="w3-right w3-opacity">16 min</span>-->
        <h4>My Settings</h4><br>
        <hr class="w3-clear">
        <!--<div><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button> 
        <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button> </div>-->
		<div id="mycart_show">
			<div>
				<div class="pull-left">I want to receive notifications</div>
				<div class="pull-right"><input type="checkbox" data-toggle="toggle" data-size="mini" id="notif_info" data-offstyle="warning" data-on="<i class='fa fa-toggle-on'></i> Yes" data-off="<i class='fa fa-toggle-off'></i> No"></div>
			</div>
			<br></br>
			<div>
				<div class="pull-left">Close my account</div>
				<div class="pull-right"><input type="checkbox" data-toggle="toggle" data-size="mini" id="close_acc" data-offstyle="success" data-onstyle="danger" data-on="<i class='fa fa-toggle-on'></i> Yes" data-off="<i class='fa fa-toggle-off'></i> No"></div>
			</div>
			<br></br>
			<div>
				<div class="pull-left">I want to get all deals information</div>
				<div class="pull-right"><input type="checkbox" data-toggle="toggle" data-size="mini" id="deal_info" data-offstyle="warning" data-on="<i class='fa fa-toggle-on'></i> Yes" data-off="<i class='fa fa-toggle-off'></i> No"></div>
			</div>
			<div style="height:40px;"></div>
		</div>
      </div>  
      
    <!-- End Middle Column -->
    </div>
    
    <!-- Right Column -->
    <div class="w3-col m2" id="all_deals">
      <div class="w3-card-2 w3-round w3-white w3-center">
        <div class="w3-container">
          <p>Upcoming Deal</p>
          <img id="deal_image" src="images/roti.jpg" alt="Roti" style="width:100%;"><br></br>
          <p><strong>Starting</strong></p>
          <p id="deal_time">Sunday 19:00</p>
          <!--<p><button class="w3-button w3-block w3-theme-l4">Info</button></p>-->
        </div>
      </div>
      <br>
      
      <div class="w3-card-2 w3-round w3-white w3-center">
        <div class="w3-container">
          <p>Ongoing Deal</p>
          <img src="images/ghugni.jpg" alt="Avatar" style="width:50%"><br></br>
          <span id="item_name">Ghugni</span>
		  <div style="height:10px"></div>
          <div class="w3-row w3-opacity" id="till_time">
            <!--<div class="w3-half">
              <button class="w3-button w3-block w3-green w3-section" title="Accept"><i class="fa fa-check"></i></button>
            </div>
            <div class="w3-half">
              <button class="w3-button w3-block w3-red w3-section" title="Decline"><i class="fa fa-remove"></i></button>
            </div>-->
			Till Sunday 5:00 PM
          </div>
		  <div id="itemId" style="display:none;">2</div>
		  <div style="height:10px"></div>
          <div class="w3-row w3-opacity" id="order_item" style="cursor:pointer;">
            <!--<div class="w3-half">
              <button class="w3-button w3-block w3-green w3-section" title="Accept"><i class="fa fa-check"></i></button>
            </div>
            <div class="w3-half">
              <button class="w3-button w3-block w3-red w3-section" title="Decline"><i class="fa fa-remove"></i></button>
            </div>-->
			<p>Order Now</p>
          </div>
        </div>
      </div>
      <br>
      <div class="w3-card-2 w3-round w3-white w3-center">
        <div class="w3-container">
          <p>My Complaints</p>
		  <div style="height:10px"></div>
          <div class="w3-row w3-opacity" id="complaints_list">
            You do not have any complaints yet.
          </div>
		  <div style="height:35px"></div>
          <div class="w3-row w3-opacity" id="new_complaint" style="cursor:pointer;">
            <!--<div class="w3-half">
              <button class="w3-button w3-block w3-green w3-section" title="Accept"><i class="fa fa-check"></i></button>
            </div>
            <div class="w3-half">
              <button class="w3-button w3-block w3-red w3-section" title="Decline"><i class="fa fa-remove"></i></button>
            </div>-->
			<p style="color: blue;">Make a complaint</p>
          </div>
        </div>
      </div>
      
      
    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  <div id="profile_userdiv" style="display:none;"><?php echo $_SESSION["user_name"];?></div>

<!-- End Page Container -->
</div>
<br>

<!-- Footer -->
<footer class="w3-container w3-theme-d3 w3-padding-16">
  <div style="width:170px;"><div class="pull-left" style="position: absolute;"><img src="PB.png" style="height: 40px;"></img></div><div class="pull-right"><h5 style="font-family:Lobster;">Pancho Byanjon</h5></div></div>
</footer>

<footer class="w3-container w3-theme-d5">
  <p>All rights reserved</p>
</footer>
 
<script>
// Accordion
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-theme-d1";
    } else { 
        x.className = x.className.replace("w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-theme-d1", "");
    }
}


function GetDetails(id) {
    var x = document.getElementById(id);
	$topic_val = $('#' + id).html();
	//alert($topic_val);
	$('#topic_header').html($topic_val);
    //if (x.className.indexOf("w3-show") == -1) {
        //x.className += " w3-show";
        //x.previousElementSibling.className += " w3-theme-d1";
    //} else { 
        //x.className = x.className.replace("w3-show", "");
        //x.previousElementSibling.className = 
        //x.previousElementSibling.className.replace(" w3-theme-d1", "");
    //}
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}

$(document).ready(function(){
	$user_name = $('#profile_userdiv').html();
	$.ajax({ url: 'api.php',
			 data: {function2call: 'GetUserProfileDetails', user_name: $user_name},
			 type: 'post',
			 //dataType: 'json',
			 success: function(output) {
						  var res = jQuery.parseJSON(output);
						  if(res.length > 0)
						  {
							  $('#profile_name').html(res[0]["FirstName"] + " " + res[0]["LastName"]);
							  $('#user_name').html(res[0]["UserId"]);
							  $('#user_email').html(res[0]["EmailId"]);
							  if(res[0]["User_Notifications"] == "N")
							  {
								  $('#notif_div').hide();
								  $('#notif_info').bootstrapToggle('off');
							  }
							  else
							  {
								  $('#notif_div').show();
								  $('#notif_info').bootstrapToggle('on');
							  }
							  
							  if(res[0]["User_Deals"] == "N")
							  {
								  $('#all_deals').hide();
								  $('#deal_info').bootstrapToggle('off');
							  }
							  else
							  {
								  $('#all_deals').show();
								  $('#deal_info').bootstrapToggle('on')
							  }
						  }
						  else
						  {
							  
						  }
					},
			 error: function ( xhr, status, error) {
						console.log('error', status);
				}
			});
});

function UpdateUserSelection($col_name, $col_val)
{
	$userid = $('#profile_userdiv').html();
	$.ajax({ url: 'api.php',
			 data: {function2call: 'UpdateUserSelection', col_name: $col_name, col_val: $col_val, userid: $userid},
			 type: 'post',
			 success: function(output) {
					},
			 error: function ( xhr, status, error) {
						console.log('error', status);
				}
			});
}

$(function() {
    $('#notif_info').change(function() {
      var rn = $(this).prop('checked');

		if(rn==false)
		{
			$('#notif_div').hide();
			UpdateUserSelection("User_Notifications","N");
			/**$.confirm({
				title: 'Confirm!',
				content: 'Are you sure you do not want any notifications?',
				buttons: {
					confirm: function () {
					$('#notif_div').hide();
					UpdateUserSelection("User_Notifications","N");
					},
					cancel: function () {
						$('#notif_info').bootstrapToggle('on');
					}
				}
			});**/
		}
		else
		{
			$('#notif_div').show();
			UpdateUserSelection("User_Notifications","Y");
		}
    })
  })
  
  
  $(function() {
    $('#deal_info').change(function() {
      var rn = $(this).prop('checked');

		if(rn==false)
		{
			$('#all_deals').hide();
			UpdateUserSelection("User_Deals","N");
			/**$.confirm({
				title: 'Confirm!',
				content: 'Are you sure you do not want any deals?',
				buttons: {
					confirm: function () {
					$('#all_deals').hide();
					UpdateUserSelection("User_Deals","N");
					},
					cancel: function () {
						$('#deal_info').bootstrapToggle('on');
					}
				}
			}); **/
		}
		else
		{
			$('#all_deals').show();
			UpdateUserSelection("User_Deals","Y");
		}
    })
  })
</script>

</body>
</html> 
