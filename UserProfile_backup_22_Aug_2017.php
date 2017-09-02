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
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
<link rel="stylesheet" href="font-awesome-animation.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<script src="moment.js"></script>
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}


<!-- this is for the rating -->

.rating {
    float:left;
}

/* :not(:checked) is a filter, so that browsers that don’t support :checked don’t 
   follow these rules. Every browser that supports :checked also supports :not(), so
   it doesn’t make the test unnecessarily selective */
.rating:not(:checked) > input {
    position:absolute;
    top:-9999px;
    clip:rect(0,0,0,0);
}

.rating:not(:checked) > label {
    float:right;
    width:1em;
    padding:0 .1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:200%;
    line-height:1.2;
    color:#ddd;
    text-shadow:1px 1px #bbb, 2px 2px #666, .1em .1em .2em rgba(0,0,0,.5);
}

.rating:not(:checked) > label:before {
    content: '★ ';
}

.rating > input:checked ~ label {
    color: #f70;
    text-shadow:1px 1px #c60, 2px 2px #940, .1em .1em .2em rgba(0,0,0,.5);
}

.rating:not(:checked) > label:hover,
.rating:not(:checked) > label:hover ~ label {
    color: gold;
    text-shadow:1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0,0,0,.5);
}

.rating > input:checked + label:hover,
.rating > input:checked + label:hover ~ label,
.rating > input:checked ~ label:hover,
.rating > input:checked ~ label:hover ~ label,
.rating > label:hover ~ input:checked ~ label {
    color: #ea0;
    text-shadow:1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0,0,0,.5);
}

.rating > label:active {
    position:relative;
    top:2px;
    left:2px;
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
<body class="w3-theme-l5">

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large" style="z-index:2">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="Home.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4" style="font-family:Lobster;" title="Home - Pancho Byanjon"><i class="fa fa-home w3-margin-right"></i>Pancho Byanjon <img src="PB.png" style="height: 25px;margin-left: 12px; margin-top: -7px;"></a>
  <!--<a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="News"><i class="fa fa-globe"></i></a>-->
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="My Cart" onclick="OpenCartDiv();"><i class="fa fa-shopping-cart faa-passing-reverse animated"></i><span class="w3-badge w3-right w3-small w3-green" id="cart_items_count">3</span></a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Feedback"><i class="fa fa-handshake-o"></i></a>
  <div class="w3-dropdown-hover w3-hide-small" id="notif_div">
    <button class="w3-button w3-padding-large" title="Notifications"><i class="fa fa-bell faa-ring animated"></i><span class="w3-badge w3-right w3-small w3-green" id="notifications_count">3</span></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px" id="notifications_list">
      <!--<a href="#" class="w3-bar-item w3-button">One new friend request</a>
      <a href="#" class="w3-bar-item w3-button">John Doe posted on your wall</a>
      <a href="#" class="w3-bar-item w3-button">Jane likes your post</a>-->
	  <span class="w3-bar-item w3-button">Please go through these notifications</span>
	  <span class="w3-bar-item w3-button">Just open the list</span>
	  <span class="w3-bar-item w3-button">And all is done</span>
    </div>
  </div>
  
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white w3-dropdown-hover" title="Log Out" onclick="LogOutUser();"><span style="font-size: 12px;position: absolute;/* width: 50px; */margin-top: 4px;">Log Out</span><i class="fa fa-sign-out" style="margin-left: 50px;"></i>
  </a>

 </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="#" class="w3-bar-item w3-button w3-padding-large">fsdfsdf</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large" onclick="OpenCartDiv();"><span class="w3-badge w3-right w3-small w3-green" id="cart_items_count_mob" style="margin-right: 80%;">3</span>My Cart</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Feedback</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Notifications</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large" onclick="LogOutUser();">Log out</a>
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
		 <div id="div_hidden_emailid" style="display:none;"></div>
         <p class="w3-center"><img src="images/avatar3.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
         <p><i class="fa fa-user-circle fa-fw w3-margin-right w3-text-theme"></i><span id="profile_name"></span></p>
         <p>
			<i class="fa fa-phone fa-fw w3-margin-right w3-text-theme"></i>
			<span id="user_name"></span>
			<span>
				<input type="text" class="form-control" id="edit_phone" style="display:none; position: absolute; left: 65px; margin-top: -25px; width: 150px;">
			</span>
			<span id="edit_ph_no" style="margin-left: 120px; cursor: pointer; position: absolute;" onclick="PhoneNumberEdit();">
				<i title="Change Phone Number" class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i>
			</span>
			<span id="update_ph_no" style="margin-left: 120px; cursor: pointer; position: absolute; display:none" onclick="PhoneNumberUpdate();">
				<i title="Update Phone Number" class="fa fa-save fa-fw w3-margin-right w3-text-theme"></i>
			</span>
			<span id="cancel_update" style="margin-left: 150px; cursor: pointer; position: absolute; display:none;" onclick="PhoneNumberEditCancel();">
				<i title="Do not update phone number" class="fa fa-times fa-fw w3-margin-right w3-text-theme"></i>
			</span>
		</p>
        <p>
			<i class="fa fa-envelope fa-fw w3-margin-right w3-text-theme"></i>
			<span id="user_email"></span>
			<span>
				<input type="text" class="form-control" id="edit_email" style="display:none; position: absolute; left: 65px; margin-top: -25px; width: 200px;">
			</span>
			<span id="edit_email_id"  style="margin-left: 35px; cursor: pointer;" onclick="EmailIdEdit();">
				<i title="Change Email Id" class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i>
			</span>
			<span id="update_email_id" style="margin-left: 35px; cursor: pointer; position: absolute; display:none;" onclick="EmailIdUpdate();">
				<i title="Update Email Id" class="fa fa-save fa-fw w3-margin-right w3-text-theme"></i>
			</span>
			<span id="cancel_update_email_id" style="margin-left: 65px; cursor: pointer; position: absolute; display:none;" onclick="EmailIdEditCancel();">
				<i title="Do not update email id" class="fa fa-times fa-fw w3-margin-right w3-text-theme"></i>
			</span>
		</p>
        </div>
      </div>
      <br>
      
      <!-- Accordion -->
      <div class="w3-card-2 w3-round">
        <div class="w3-white">
          <!--<button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-heart fa-fw w3-margin-right"></i> <span id="my_fav">My Favourites</span></button>-->
		  <button onclick="GetDetails('my_fav'); ShowDivDetails('show_user_favs', 'show_my_addresses', 'change_ps_div', 'show_my_ratings', 'show_my_reviews', 'new_address_container'); $('#midcontainerdiv').css('margin-left', '10%'); $('#midcontainerdiv').css('width', '60%'); $('#show_user_addresses').hide(); $('#rowaddresses').hide(); $('#add_division').hide();" class="w3-button w3-block w3-theme-l1 w3-left-align" onmouseover="ChangeColor('heartid', 'red');" onmouseout="ChangeColor('heartid', 'white');"><i id="heartid" class="fa fa-heart fa-fw w3-margin-right"></i> <span id="my_fav">My Favourites</span></button>
          <div id="Demo1" class="w3-hide w3-container">
            <p>Some text..</p>
          </div>
          <!--<button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-shopping-bag fa-fw w3-margin-right"></i> <span id="my_orders">My Orders</span></button>-->
		  <button onclick="GetDetails('my_orders'); $('#midcontainerdiv').css('width', '60%'); $('#show_user_addresses').hide();" class="w3-button w3-block w3-theme-l1 w3-left-align" onmouseover="ChangeColor('shoppingid', '#178665');" onmouseout="ChangeColor('shoppingid', 'white');"><i id="shoppingid" class="fa fa-shopping-bag fa-fw w3-margin-right"></i> <span id="my_orders">My Orders</span></button>
          <div id="Demo2" class="w3-hide w3-container">
            <p>Some other text..</p>
          </div>
          <!--<button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-address-card fa-fw w3-margin-right"></i> <span id="my_addresses">My Addresses</span></button>-->
		  <button onclick="GetDetails('my_addresses'); ShowDivDetails('show_my_addresses', 'change_ps_div', 'show_my_ratings', 'show_my_reviews', 'new_address_container', 'show_user_favs'); $('#midcontainerdiv').css('margin-left', '30%'); $('#midcontainerdiv').css('margin-left', '0%'); $('#midcontainerdiv').css('width', '100%'); $('#show_user_addresses').show(); $('#rowaddresses').show(); $('#add_division').show();" class="w3-button w3-block w3-theme-l1 w3-left-align" onmouseover="ChangeColor('addressid', 'blue');" onmouseout="ChangeColor('addressid', 'white');"><i id="addressid" class="fa fa-address-card fa-fw w3-margin-right"></i> <span id="my_addresses">My Addresses</span></button>
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
		  <button onclick="GetDetails('change_password'); ShowDivDetails('change_ps_div', 'show_my_ratings', 'show_my_reviews', 'show_my_addresses', 'new_address_container', 'show_user_favs'); $('#midcontainerdiv').css('margin-left', '30%'); $('#midcontainerdiv').css('width', '60%'); $('#show_user_addresses').hide(); $('#add_division').hide();" class="w3-button w3-block w3-theme-l1 w3-left-align" onmouseover="ChangeColor('pswdid', 'orange');" onmouseout="ChangeColor('pswdid', 'white');"><i id="pswdid" class="fa fa-edit fa-fw w3-margin-right"></i> <span id="change_password">Change Password</span></button>
          <div id="Demo4" class="w3-hide w3-container">
            <p>Some other text..</p>
          </div>
		  <button onclick="GetDetails('my_ratings'); ShowDivDetails('show_my_ratings', 'change_ps_div', 'show_my_reviews', 'show_my_addresses', 'new_address_container', 'show_user_favs'); ShowMyRatings(); $('#midcontainerdiv').css('margin-left', '10%'); $('#midcontainerdiv').css('width', '60%'); $('#show_user_addresses').hide(); $('#add_division').hide();" class="w3-button w3-block w3-theme-l1 w3-left-align" onmouseover="ChangeColor('ratingsid', '#d43dde');" onmouseout="ChangeColor('ratingsid', 'white');"><i id="ratingsid" class="fa fa-handshake-o fa-fw w3-margin-right"></i> <span id="my_ratings">My Ratings</span></button>
          <div id="Demo5" class="w3-hide w3-container">
            <p>Some other text..</p>
          </div>
		  <button onclick="GetDetails('my_reviews'); ShowDivDetails('show_my_reviews','show_my_ratings', 'change_ps_div', 'show_my_addresses', 'new_address_container', 'show_user_favs'); ShowMyReviews(); $('#midcontainerdiv').css('margin-left', '10%'); $('#midcontainerdiv').css('width', '60%'); $('#show_user_addresses').hide(); $('#add_division').hide();" class="w3-button w3-block w3-theme-l1 w3-left-align" onmouseover="ChangeColor('reviewsid', '#d4615f');" onmouseout="ChangeColor('reviewsid', 'white');"><i id="reviewsid" class="fa fa-thumbs-o-up fa-fw w3-margin-right"></i> <span id="my_reviews">My Reviews</span></button>
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
          <div class="w3-card-2 w3-round w3-white" style="margin-top:0">
            <div class="w3-container w3-padding">
              <h6 class="w3-opacity pull-right">Snapshot: My Expenditure</h6>
              <!--<p contenteditable="true" class="w3-border w3-padding">Status: Feeling Blue</p>
              <button type="button" class="w3-button w3-theme"><i class="fa fa-pencil"></i>  Post</button> -->
			  <!-- creating the graphs -->
				
				<div id="chart_div"></div>
				
			  <!-- end of creation -->
            </div>
          </div>
        </div>
      </div>
	  
	  <!--testing to fit a page within this div-->
	  
	  <div class="w3-container w3-card-2 w3-white w3-round w3-margin" id="load_page_div" style="display:none;"><br>
        <span id="load_cart" style="display:none">
			
		</span>
      </div> 
	  
	  <!--end test-->
	  
    <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
        <!--<img src="/w3images/avatar2.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">-->
        <!--<span class="w3-right w3-opacity">1 min</span>-->
        <h4 id="topic_header"></h4><br>
        <hr class="w3-clear">
			<div style="width: 60%;margin-left: 30%;" id="midcontainerdiv">
				<div id="change_ps_div" style="display:none;">
					<form class="">
						<div class="form-group" style="width: 80%;">
							<label for="password" class="cols-sm-2 control-label">Old Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<div class="inner-addon" style="position: relative;width: 95%;"><i class="fa fa-eye" aria-hidden="true" style="position: absolute;padding-top: 10px;cursor: pointer; right:0;" id="hspos"></i></div>
									<input type="password" class="form-control" onblur="CheckForPass($('#profile_userdiv').html(), $('#old_password').val()); FillPassword();" onfocus="ResetPassword();" name="old_password" id="old_password"  placeholder="Enter your old Password" style="position: static;"/>
								</div>
							</div>
						</div>
						
						<div class="form-group" style="width: 80%;">
							<label for="password" class="cols-sm-2 control-label">New Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<div class="inner-addon" style="position: relative;width: 95%;"><i class="fa fa-eye" aria-hidden="true" style="position: absolute;padding-top: 10px;cursor: pointer; right:0;" id="hsps"></i></div>
									<input type="password" class="form-control" onblur="CheckPasswordMatch(); FillPassword();" onfocus="ResetPassword();" name="password" id="password"  placeholder="Enter your new Password" style="position: static;"/>
								</div>
							</div>
						</div>
						<div class="form-group" style="width: 80%;">
							<label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<div class="inner-addon" style="position: relative;width: 95%;"><i class="fa fa-eye" aria-hidden="true" style="position: absolute;padding-top: 10px;cursor: pointer; right:0;" id="hspsc"></i></div>
									<input type="password" class="form-control" onblur="CheckPasswordMatch(); FillCPassword();" onfocus="ResetCPassword();" name="confirm" id="confirm"  placeholder="Confirm your new Password" style="position: static;"/>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<a type="button" id="button" class="btn btn-primary" onclick="UpdateResetRecord($('#password').val())" style="margin-left: 15%;">Reset Password</a>
						</div>
						<div class="panel-footer" id="errDiv" style="border-top: 0px solid #ddd; background-color: #ffffff">
							
						</div>
					</form>
				</div>
				<div id="show_my_ratings" style="display:none;">
					<div class="rating_container" id="rowrating">
						
					</div>
				</div>
				
				<div id="show_my_reviews" style="display:none;">
					<div class="rating_container" id="rowreview">
						
					</div>
				</div>
				
				<!-- Show user favourites here...add a div here -->
				<div id="show_user_favs"">
					<div class="container-fluid" id="user_row_favs">
						<!--<div class="row">
							<!--<div class="col-lg-2">
								Home
							</div>
							<div class="col-lg-8">
								33B, Madhab Halder Road, Behala, Kolkata - 700034
							</div>
							<div class="col-lg-1" style="cursor: pointer;" title="Edit address">
								<i class="fa fa-pencil"></i>
							</div>
							<div class="col-lg-1" style="cursor: pointer;" title="Delete address">
								<i class="fa fa-trash"></i>
							</div>
						</div>-->
					</div>
				</div>
				
				<!-- end of user favourites display -->
				
				<!-- Show user Addresses here...add a div here -->
				<div id="show_user_addresses" style="display:none;">
					<div class="container-fluid" id="user_row_addresses">
						<!--<div class="row">
							<!--<div class="col-lg-2">
								Home
							</div>
							<div class="col-lg-8">
								33B, Madhab Halder Road, Behala, Kolkata - 700034
							</div>
							<div class="col-lg-1" style="cursor: pointer;" title="Edit address">
								<i class="fa fa-pencil"></i>
							</div>
							<div class="col-lg-1" style="cursor: pointer;" title="Delete address">
								<i class="fa fa-trash"></i>
							</div>
						</div>-->
					</div>
				</div>
				
				<!-- end of user addresses display -->
				<hr class="w3-clear" id="add_division">
				<div id="show_my_addresses" style="display:none;">
					<div id="new_address_container" style="display:none;">
						<div class="row">
							<div class="col-md-4 col-md-offset-1" style="width: 150%;">
							  <form class="form-horizontal" role="form">
								<fieldset style="border-radius: 5px;">

								  <!-- Form Name -->
								  <legend>Add Address Details</legend>

								  <!-- Text input-->
								  <div class="form-group">
									<label class="col-sm-2 control-label" for="textinput">Address 1</label>
									<div class="col-sm-10">
									  <input type="text" placeholder="Address Line 1" class="form-control" id="addr1">
									</div>
								  </div>

								  <!-- Text input-->
								  <div class="form-group">
									<label class="col-sm-2 control-label" for="textinput">Address 2</label>
									<div class="col-sm-10">
									  <input type="text" placeholder="Address Line 2" class="form-control" id="addr2">
									</div>
								  </div>

								  <!-- Text input-->
								  <div class="form-group">
									<label class="col-sm-2 control-label" for="textinput">City</label>
									<div class="col-sm-10">
									  <input type="text" placeholder="City" class="form-control" value = "Kolkata" disabled id="city">
									</div>
								  </div>

								  <!-- Text input-->
								  <div class="form-group">
									<label class="col-sm-2 control-label" for="textinput">State</label>
									<div class="col-sm-4">
									  <input type="text" placeholder="State" class="form-control" value = "West Bengal" disabled id="state">
									</div>

									<label class="col-sm-2 control-label" for="textinput">Postcode</label>
									<div class="col-sm-4">
									  <input type="text" placeholder="Post Code" class="form-control" id="area_zipcode" onblur="GetGeoPlaces();">
									</div>
								  </div>
								  
								  <!-- Text input-->
								  <div class="form-group">
									<label class="col-sm-2 control-label" for="textinput">Country</label>
									<div class="col-sm-10">
									  <input type="text" placeholder="Country" class="form-control" value = "India" disabled id="country">
									</div>
								  </div>
								  
								  <!--<div class="form-group" style="display:none;" id="area_div_select">
									<label class="col-sm-2 control-label" for="textinput">Area</label>
									<div class="col-sm-10">
									  <!--<input type="text" placeholder="Area" class="form-control" value = "">-->
									  <!--<select id="area_select" class="form-control"></select>
									</div>
								  </div>-->
								  
								   <div class="form-group" style="display:none;" id="area_div_select">
									<label class="col-sm-2 control-label" for="textinput">Area</label>
									<div class="col-sm-10">
									  <input type="text" name="example" list="area_select" class="form-control" id="areadesc" placeholder="Select or enter your area here">
									  <!--<select id="area_select" class="form-control"></select>-->
									  <datalist id="area_select" class="form-control" style="display:none;"></datalist>
									</div>
								  </div>
								  
								  <div class="form-group">
									<label class="col-sm-2 control-label" for="textinput">Nick Name</label>
									<div class="col-sm-10">
									  <input type="text" placeholder="Put a name for the address" class="form-control" id="nickname">
									</div>
								  </div>
								  
								  <div id="toggleval" style="display:none;">0</div>
								  <div id="user_addrid" style="display:none;"></div>
								  
								  <div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
									  <div class="pull-right">
										<button type="button" class="btn btn-default" onclick="AddressCancelClick();">Cancel</button>
										<button type="button" class="btn btn-primary" onclick="AddressSaveClick();">Save</button>
									  </div>
									</div>
								  </div>

								</fieldset>
							  </form>
							</div><!-- /.col-lg-12 -->
						</div><!-- /.row -->
						<div style="height:20px;"></div>
					</div>
					<div class="rating_container" id="rowaddresses" style="cursor: pointer; height: 45px; margin-left: 300px; margin-top: 20px; width: 100%;" title="Add a new address" onmouseover="ChangeColor('address_add_id', 'blue');" onmouseout="ChangeColor('address_add_id', 'black');" onclick="AddressAddClick();">
					
						<div style="position: relative;">
							<div class="col-xs-2 pull-right" style="width: 65%;"><i id="address_add_id" class="fa fa-plus fa-fw w3-margin-right"></i></div>
							<div class="col-xs-2 pull-right" style="position: absolute; right: 0px; width: 61%;">Add Address</div>
						</div>
					</div>
				</div>
			</div>
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
      <div class="w3-card-2 w3-round w3-white w3-center" id="upcoming_deals">
        <div class="w3-container">
          <p>Upcoming Deal</p>
          <img id="deal_image" src="images/roti.jpg" alt="Roti" style="width:100%;"><br></br>
          <p><strong>Starting</strong></p>
          <p id="deal_time">Sunday 19:00</p>
          <!--<p><button class="w3-button w3-block w3-theme-l4">Info</button></p>-->
        </div>
      </div>
      <br id="first_br">
      
      <div class="w3-card-2 w3-round w3-white w3-center" id="ongoing_deals">
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
      <br id="second_br">
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
  <span class="pull-right">© All rights reserved</span>
</footer>
 			  
<script>

  var pfilled;
  var cpfilled;
  var idreset;
  var psmatch;
  var pwdbmatch;
  var g_id;
  
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



function GetDetails(id) {
    var x = document.getElementById(id);
	$topic_val = $('#' + id).html();
	//alert($topic_val);
	$('#topic_header').html($topic_val);
	$('#' + id).show();
}

function ShowDivDetails(id, idhide, thide, fhide, fihide, shide, sehide) {
	$('#' + id).show();
	$('#' + idhide).hide();
	$('#' + thide).hide();
	$('#' + fhide).hide();
	$('#' + fihide).hide();
	$('#' + shide).hide();
	$('#' + sehide).hide();
	$('#rowrating').html('');
}
//
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
							  $('#user_name').html(res[0]["User_Ph_No"]);
							  $('#div_hidden_emailid').html(res[0]["EmailId"]);
							  $full_email_id = $('#div_hidden_emailid').html();
							  if(res[0]["EmailId"].length > 21)
							  {
								  $('#user_email').html(res[0]["EmailId"].substr(0, 21) + "...");
								  $('#user_email').prop('title', $full_email_id);
							  }
							  else
							  {
								  $('#user_email').html(res[0]["EmailId"]);//substr(0, 1)
							  }
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
								  $('#ongoing_deals').hide();
								  $('#upcoming_deals').hide();
								  //$('#all_deals').find('br').remove();
								  $('#first_br').hide();
								  $('#second_br').hide();
								  $('#deal_info').bootstrapToggle('off');
							  }
							  else
							  {
								  $('#ongoing_deals').show();
								  $('#upcoming_deals').show();
								  $('#first_br').show();
								  $('#second_br').show();
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
			
			CreateGraph();
			GetUserCartItems('ABCD1234');
			$('#load_cart').load('UserCart.php');
			//$('#load_page_div').css('margin-top', '0% !important;');
			//$('#load_page_div').style.setProperty( 'margin-top', '0%', 'important' );
			HideShowPw();
			GetUserAddresses();
			GetUserFavs();
});

function OpenCartDiv()
{
	//$('#load_cart').hide();
	//$('#load_page_div').attr('style','margin-top:0% !important');
	$( "#load_page_div" ).slideDown( "slow", function() {
			$( "#load_page_div" ).fadeIn();
			// Animation complete.
		  });	 
	setTimeout(function() 
	  {
		$('#user_cart_main_container').css('display', 'inline');
	  }, 400);
	  
	  setTimeout(function() 
	  {
		$('#load_cart').show();
	  }, 1000); 
}

function GetUserCartItems($userid)
{
	var cartitemresult = 0;
	//fetch items' price from database and display
	$.ajax({ url: 'api.php',
         data: {function2call: 'GetUserCartItems', userid: $userid},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
                      cartitemresult = jQuery.parseJSON(output)[0]["SUM(ItemQty)"];
					  $("#cart_items_count").html(cartitemresult);
					  $("#cart_items_count_mob").html(cartitemresult);
			}
		});
}


function CheckForPass($userid, $pwd)
{
	$.ajax({ url: 'api.php',
         data: {function2call: 'CheckForPass', userid: $userid, pwd: $pwd},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
					  var res = jQuery.parseJSON(output);
					  if(res.length == 0)
					  {
						  $('#errDiv').html('The password does not match !');
						  pwdbmatch = false;
					  }
					  else
					  {
						  pwdbmatch = true;
					  }
			}
		});
}

function UpdateResetRecord($ps_reset)
{
	$id_reset = $('#profile_userdiv').html();
	if(psmatch == true && cpfilled == true && pfilled == true && pwdbmatch == true)
	{
		$.ajax({ url: 'api.php',
			 data: {function2call: 'UpdateResetRecord', ps_reset: $ps_reset, id_reset: $id_reset},
			 type: 'post',
			 //dataType: 'json',
			 success: function(output) {
						  $('#errDiv').html('Password has been successfully changed.');
						  $('#old_password').val('');
						  $('#password').val('');
						  $('#confirm').val('');
					},
			 error: function ( xhr, status, error) {
						console.log('error', status);
				}
			});
	}
}

function HideShowPw()
{
	$("#hsps").click(function () {
		 if ($("#password").attr("type")=="password") {
			 $("#password").attr("type", "text");
			 //$("#hsps").attr("src", "images/eyec.png");
			 $("#hsps").removeClass('fa fa-eye').addClass('fa fa-eye-slash');//replaceClass('fa fa-eye','fa fa-eye-slash');
		 }
		 else{
			 $("#password").attr("type", "password");
			 //$("#hsps").attr("src", "images/eye.png");
			 $("#hsps").removeClass('fa fa-eye-slash').addClass('fa fa-eye');//$("#hsps").replaceClass('fa fa-eye-slash','fa fa-eye');
		 }
 
	});
			 
			 
	 $("#hspsc").click(function () {
		 if ($("#confirm").attr("type")=="password") {
			 $("#confirm").attr("type", "text");
			 //$("#hspsc").attr("src", "images/eyec.png");
			 $("#hspsc").removeClass('fa fa-eye').addClass('fa fa-eye-slash');
		 }
		 else{
			 $("#confirm").attr("type", "password");
			 //$("#hspsc").attr("src", "images/eye.png");
			 $("#hspsc").removeClass('fa fa-eye-slash').addClass('fa fa-eye');
		 }
	 
	 });
			 
	 $("#hspos").click(function () {
		 if ($("#old_password").attr("type")=="password") {
			 $("#old_password").attr("type", "text");
			 //$("#hspos").attr("src", "images/eyec.png");
			 $("#hspos").removeClass('fa fa-eye').addClass('fa fa-eye-slash');
		 }
		 else{
			 $("#old_password").attr("type", "password");
			 //$("#hspos").attr("src", "images/eye.png");
			 $("#hspos").removeClass('fa fa-eye-slash').addClass('fa fa-eye');
		 }
	 
	 });
}

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
			$('#ongoing_deals').hide();
			$('#upcoming_deals').hide();
			//$('#all_deals').find('br').remove();
			$('#first_br').hide();
			$('#second_br').hide();
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
			$('#ongoing_deals').show();
			$('#upcoming_deals').show();
			$('#first_br').show();
			$('#second_br').show();
			UpdateUserSelection("User_Deals","Y");
		}
    })
  })
  
  
  function CreateGraph()
  {
	  google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Expenses'],
		  ['Aug 16', 2098],
		  ['Sep 16', 576],
		  ['Oct 16', 1753],
		  ['Nov 16', 1449],
		  ['Dec 16', 1593],
		  ['Jan 17', 987],
		  ['Feb 17', 373],
		  ['Mar 17', 856],
          ['Apr 17', 1000],
          ['May 17', 1170],
          ['Jun 17', 660],
          ['Jul 17', 1030]
        ]);

        var options = {
          chart: {
            title: 'My Monthly Expenditure',
            subtitle: 'Expenses for the last 12 months',
          },
          bars: 'vertical',
          vAxis: {format: 'decimal'},
          height: 400,
          colors: ['#1b9e77', '#d95f02', '#7570b3']
        };

        var chart = new google.charts.Bar(document.getElementById('chart_div'));

        chart.draw(data, google.charts.Bar.convertOptions(options));

        var btns = document.getElementById('btn-group');

        btns.onclick = function (e) {

          if (e.target.tagName === 'BUTTON') {
            options.vAxis.format = e.target.id === 'none' ? '' : e.target.id;
            chart.draw(data, google.charts.Bar.convertOptions(options));
          }
        }
      }
  }
	
function LogOutUser()
{
	$.ajax({ url: 'api.php',
         data: {function2call: 'Logout'},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
                      //var res = jQuery.parseJSON(output);
					  window.location.href = "Home.php";
		 },
		 error: function ( xhr, status, error) {
					alert('Problem updating the database');
			}
		});
}

function ShowMyRatings()
{
	$userid = $('#profile_userdiv').html();
	$.ajax({ url: 'api.php',
         data: {function2call: 'ShowMyRatings', userid: $userid},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
			 var res = jQuery.parseJSON(output);
			 var html_val = "";
			 for(var i=0;i<res.length;i++)
			 {
				 var rotiid = "roti_id" + i;
				 var itemimagerating = "itemimagerating" + i;
				 var itemrating = "itemrating" + i;
				 var firstChar = res[i]["ItemDesc"].substr(0, 1).toLowerCase();
				  html_val = html_val + "<div class='row' style='border: 1px solid; border-radius: 5px;'><div class='panel panel-primary' style='border-bottom-left-radius: 0px; border-bottom-right-radius: 0px;'><div class='panel-heading'><span id=" + rotiid + ">" + res[i]["ItemDesc"] + "</span></div><div class='col-xs-6 pull-left panel-body' id=" + itemimagerating + "><img class='img-responsive' src='" + res[i]["ItemImage"] + "'></img></div><div style='padding-top:12%;' class='col-xs-6 pull-right' id=" + itemrating + "><fieldset style='border: 0px solid #c0c0c0;margin: 0 0px;padding: 0em 0em 0em;' class='rating'><input type='radio' id='" + firstChar + "star5' name='" + firstChar + "rating' value='5' onclick='UserReviews(" + '"' + res[i]["ItemDesc"] + '"' + "," + '"' + firstChar + "star5" + '"' + ")" + "'" + "/><label for='" + firstChar + "star5' title='Excellent!'>5 stars</label><input type='radio' id='" + firstChar + "star4' name='" + firstChar + "rating' value='4' onclick='UserReviews(" + '"' + res[i]["ItemDesc"] + '"' + "," + '"' + firstChar + "star4" + '"' + ")" + "'" + "/><label for='" + firstChar + "star4' title='Pretty good'>4 stars</label><input type='radio' id='" + firstChar + "star3' name='" + firstChar + "rating' value='3' onclick='UserReviews(" + '"' + res[i]["ItemDesc"] + '"' + "," + '"' + firstChar + "star3" + '"' + ")" + "'" + "/><label for='star3' title='Good'>3 stars</label><input type='radio' id='" + firstChar + "star2' name='" + firstChar + "rating' value='2' onclick='UserReviews(" + '"' + res[i]["ItemDesc"] + '"' + "," + '"' + firstChar + "star2" + '"' + ")" + "'" + "/><label for='" + firstChar + "star2'" + firstChar + " title='Bad'>2 stars</label><input type='radio' id='" + firstChar + "star1' name='" + firstChar + "rating' value='1' onclick='UserReviews(" + '"' + res[i]["ItemDesc"] + '"' + "," + '"' + firstChar + "star1" + '"' + ")" + "'" + "/><label for='" + firstChar + "star1' title='Horrible'>1 star</label></fieldset></div></div></div><br></br>";
			 }
			 $('#rowrating').html(html_val);
			 GetUserReviews();
			}
		});
}

function FavouritesOnClick()
{
	GetDetails('my_fav');
	$('#midcontainerdiv').css('margin-left', '10%'); 
	$('#midcontainerdiv').css('width', '60%'); 
	$('#show_user_addresses').hide(); 
	$('#rowaddresses').hide(); 
	$('#add_division').hide();
}


function GetUserFavs()
{
	$userid = $('#profile_userdiv').html();
	$.ajax({ url: 'api.php',
         data: {function2call: 'GetUserFavs', userid: $userid},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
			 var res = jQuery.parseJSON(output);
			 var html_val = "";
			 for(var i=0;i<res.length;i++)
			 {
				 var rotiid = "roti_id" + i;
				 var itemimagerating = "userfavid" + i;
				 var itemrating = "userfavitemid" + i;
				 var sel_user_fav = "sel_user_fav" + i;
				 //var firstChar = res[i]["ItemDesc"].substr(0, 1).toLowerCase();
				  html_val = html_val + "<div class='row' style='border: 1px solid; border-radius: 5px;'><div class='panel panel-primary' style='border-bottom-left-radius: 0px; border-bottom-right-radius: 0px;'><div class='panel-heading'><span id=" + rotiid + ">" + res[i]["ItemDescription"] + "</span></div><div class='col-xs-6 pull-left panel-body' id=" + itemimagerating + "><img class='img-responsive' src='" + res[i]["ItemImage"] + "'></img></div><div style='padding-top:14%; padding-left: 30%;' class='col-xs-6 pull-right' id=" + itemrating + "><i  style='cursor: pointer; color:red; text-shadow: 4px 4px 6px #777;' title='Remove from favourites' class='fa fa-heart faa-pulse animated fa-2x' id=" + sel_user_fav + " onclick='StoreUserFavs(" + '"' + res[i]["ItemId"] + '"' + "," + '"' + sel_user_fav + '"' + ")" + "'" + "></i></div></div></div><br></br>";
			 }
			 $('#user_row_favs').html(html_val);
			 FavouritesOnClick();
			}
		});
}

function ChangeColor($id, $colr)
{
	$('#' + $id).css('color' , $colr);
}

function StoreUserFavs($itemid, $id)
{
	$userid = $('#profile_userdiv').html();
	$.ajax({ url: 'api.php',
         data: {function2call: 'StoreUserFavs', userid: $userid, itemid: $itemid},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
			 var res = jQuery.parseJSON(output);
			 if(res == null)
			 {
				ChangeColor($id, 'red');
				$('#' + $id).prop('title', 'Remove from favourites');
			 }
			 else
			 {
				 ChangeColor($id, 'black');
				 $('#' + $id).prop('title', 'Mark as favourite');
				 GetUserFavs();
			 }
			}
		});
}


function ShowMyReviews()
{
	$userid = $('#profile_userdiv').html();
	$.ajax({ url: 'api.php',
         data: {function2call: 'ShowMyRatings', userid: $userid},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
			 var res = jQuery.parseJSON(output);
			 var html_val = "";
			 for(var i=0;i<res.length;i++)
			 {
				 var textid = "message" + i;
				 var rotiid = "roti_id" + i;
				 var itemimagerating = "itemimagerating" + i;
				 var itemreview = "itemreview" + i;
				 var reviewlabel = "reviewlabel" + i;
				 var iwritereview = "iwritereview" + i;
				 var isavereview = "isavereview" + i;
				 var icancelreview = "icancelreview" + i;
				 var firstChar = res[i]["ItemDesc"].substr(0, 1).toLowerCase();
				  html_val = html_val + "<div class='row' style='border: 1px solid; border-radius: 5px;'><div class='panel panel-primary' style='border-bottom-left-radius: 0px; border-bottom-right-radius: 0px;'><div class='panel-heading'><span id=" + rotiid + ">" + res[i]["ItemDesc"] + "</span></div><div class='col-xs-6 pull-left panel-body' id=" + itemimagerating + "><img style='border-radius: 5px' class='img-responsive' src='" + res[i]["ItemImage"] + "'></img></div><div style='padding-top:3%;' class='col-xs-6 pull-right' id=" + itemreview + "><textarea style='height: 108px;width: 198px; margin: 0px; border-radius: 5px; display:none; font-size:10px;' cols='22' rows='5' id=" + textid + " name=" + textid + "></textarea><label id=" + reviewlabel + " style='height: 108px;width: 198px; margin: 0px; border-radius: 5px; font-size:10px;'>" + res[i]["Reviews"] + "</label><div title='Write a review' style='cursor: pointer;'><i id=" + iwritereview + " class='fa fa-pencil fa-fw w3-margin-right w3-text-theme' onclick='EnableReview(" + '"' + reviewlabel + '"' + "," + '"' + iwritereview + '"' + "," + '"' + textid + '"' + "," + '"' + isavereview + '"' + "," + '"' + icancelreview + '"' + ")" + "'" + "></i><i id=" + isavereview + " class='fa fa-save fa-fw w3-margin-right w3-text-theme' title='Save your review' style='display:none; cursor: pointer;' onclick='SaveReview(" + '"' + reviewlabel + '"' + "," + '"' + iwritereview + '"' + "," + '"' + textid + '"' + "," + '"' + isavereview + '"' + "," + '"' + res[i]["ItemDesc"] + '"' + ")" + "'" + "," + '"' + icancelreview + '"' + ")" + "'" + "></i><i id=" + icancelreview + " style='display:none; cursor: pointer;' title='Cancel Update' class='fa fa-times fa-fw w3-margin-right w3-text-theme' onclick='CancelUpdateReview(" + '"' + reviewlabel + '"' + "," + '"' + iwritereview + '"' + "," + '"' + textid + '"' + "," + '"' + isavereview + '"' + "," + '"' + icancelreview + '"' + ")" + "'" + "></i></div></div></div></div><br></br>";
			 }
			 $('#rowreview').html(html_val);
			 //GetUserReviews();
			}
		});
}

function EnableReview(label, ricon, txtarea, sicon, cicon)
{
	$('#' + txtarea).val($('#' + label).html());
	$('#' + label).hide();
	$('#' + ricon).hide();
	$('#' + txtarea).show();
	$('#' + sicon).show();
	$('#' + cicon).show();
}

function CancelUpdateReview($label, $ricon, $txtare, $sicon, $cicon)
{
	$('#' + $label).show();
	$('#' + $ricon).show();
	$('#' + $txtare).hide();
	$('#' + $sicon).hide();
	$('#' + $cicon).hide();
}

function SaveReview($label, $ricon, $txtare, $sicon, $itdesc, $cicon)
{
	$('#' + $label).show();
	$('#' + $ricon).show();
	$('#' + $txtare).hide();
	$('#' + $sicon).hide();
	$('#' + $cicon).hide();
	$txtarea = $('#' + $txtare).val();
	$.ajax({ url: 'api.php',
         data: {function2call: 'SaveReview', txtarea: $txtarea, itdesc: $itdesc, userid: $userid},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
                      //var res = jQuery.parseJSON(output);
					  //window.location.href = "Home.php";
					  $showTxt = $('#' + $txtare).val();
					  $('#' + $label).show();
						$('#' + $ricon).show();
						$('#' + $txtare).hide();
						$('#' + $sicon).hide();
						$('#' + $label).html($showTxt);
		 },
		 error: function ( xhr, status, error) {
					alert('Problem updating the database');
			}
		});
}




function UserReviews($itdesc, $idvl)
{
	//alert($('#' + $id).val());
	//alert('#rstar5').html();
	//var cartitemresult = 0;
	$clval = $idvl;
	$idval = $('#' + $idvl).val();
	//fetch items' price from database and display
	$userid = $('#profile_userdiv').html();
	$.ajax({ url: 'api.php',
         data: {function2call: 'UserReviews', userid: $userid, itdesc: $itdesc, idval: $idval, clval: $clval},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
			 //alert(output);
			}
		});
}


function GetUserReviews()
{
	//$clval = $idvl;
	//$idval = $('#' + $idvl).val();
	//fetch items' price from database and display
	$userid = $('#profile_userdiv').html();
	$.ajax({ url: 'api.php',
         data: {function2call: 'GetUserReviews', userid: $userid},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
			 var res = jQuery.parseJSON(output);
			 
			 for(var i=0;i<res.length;i++)
			 {
				 $('#' + res[i]["RatingValue"]).prop("checked", true);
			 }
			}
		});
}

function ChangeColor($id, $colr)
{
	$('#' + $id).css('color' , $colr);
}

function GetGeoPlaces()
{
	$zip_code = $('#area_zipcode').val();
	if($zip_code != "")
	{
		$('#cartitemcontainer').show();
		$.ajax({ url: 'api.php',
			 data: {function2call: 'GetGeoPlaces', zip_code: $zip_code},
			 type: 'post',
			 //dataType: 'json',
			 success: function(output) {
				 if(output.startsWith('<br'))
				 {
					 $('#cartitemcontainer').hide();
				 }
				 else if(output != "")
				 {
					 var res = jQuery.parseJSON(output);
					 var area_html = "";
					 if(res.data.length > 0)
					 {
						 for(i=0; i<res.data.length; i++)
						 {
							 if(i == 0)
							 {
								 area_html = area_html + "<option selected='true'>" + res.data[i]["office_name"] + "</option>";
								 //$('#areadesc').val(res.data[i]["office_name"]);
							 }
							 else
							 {
								 area_html = area_html + "<option>" + res.data[i]["office_name"] + "</option>";
							 }
						 }
						 $('#area_select').html(area_html);
						 $('#area_div_select').show();
					 }
				 }
				 $('#cartitemcontainer').hide();
				 $('#areadesc').focus();
				},
				error: function ( xhr, status, error) {
							$('#cartitemcontainer').hide();
					}
				//
			});
	}
	else
	{
		//alert('Please enter a zip code');
		$('#area_zipcode').focus();
	}
}

function CallToAddCustAddress($action_val)
{
	$('#cartitemcontainer').show();
	
	$userid = $('#profile_userdiv').html();
	$addr1 = $('#addr1').val().replace("'","''");;
	$addr2 = $('#addr2').val().replace("'","''");;
	$city = $('#city').val();
	$state = $('#state').val();
	$country = $('#country').val();
	$zipcode = $('#area_zipcode').val();
	$areadesc = $('#areadesc').val().replace("'","''");;
	$address_nickname = $('#nickname').val().replace("'","''");
	$user_address_id = $('#user_addrid').html();
	
	StoreCustomerAddresses($userid, $addr1, $addr2, $city, $state, $country, $zipcode, $areadesc, $address_nickname, $action_val, $user_address_id);
	
	$('#cartitemcontainer').hide();
}

function StoreCustomerAddresses($userid, $addr1, $addr2, $city, $state, $country, $zipcode, $areadesc, $address_nickname, $action_val, $user_address_id)
{
	$.ajax({ url: 'api.php',
         data: {function2call: 'StoreCustomerAddresses', userid: $userid, addr1: $addr1, addr2: $addr2, city: $city, state: $state, country: $country, zipcode: $zipcode, areadesc: $areadesc, address_nickname: $address_nickname, action_val: $action_val, user_address_id: $user_address_id},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
			 //var res = jQuery.parseJSON(output);
			 $('#addr1').val('');
			 $('#addr2').val('');
			 $('#area_zipcode').val('');
			 $('#area_div_select').hide();
			 
			 $('#midcontainerdiv').css('width', '100%'); 
			 $('#show_user_addresses').show(); 
			 $('#new_address_container').hide(); 
			 $('#rowaddresses').show(); 
			 $('#add_division').show(); 
			 GetUserAddresses();
			}
		});
}

function PhoneNumberEdit()
{
	$('#edit_phone').show(); 
	$('#edit_phone').val($('#user_name').html());
	$('#update_ph_no').show();
	$('#cancel_update').show();
	$('#edit_ph_no').hide();
}

function PhoneNumberEditCancel()
{
	$('#edit_phone').hide(); 
	//$('#edit_phone').val($('#user_name').html());
	$('#update_ph_no').hide();
	$('#cancel_update').hide();
	$('#edit_ph_no').show();
}

function PhoneNumberUpdate()
{
	$phone_number = $('#edit_phone').val();
	$userid = $('#profile_userdiv').html();
	if($phone_number == "")
	{
		alert('Please enter a phone number');
	}
	else if($('#edit_phone').val().length < 10 || $('#edit_phone').val().length > 10)
	{
		alert('The phone number is not valid');
	}
	else
	{
		$.ajax({ url: 'api.php',
			 data: {function2call: 'PhoneNumberUpdate', phone_number: $phone_number, userid: $userid},
			 type: 'post',
			 //dataType: 'json',
			 success: function(output) {
				 //var res = jQuery.parseJSON(output);
					$('#user_name').html($('#edit_phone').val());
					$('#edit_phone').hide(); 
				//$('#edit_phone').val($('#user_name').html());
					$('#update_ph_no').hide();
					$('#cancel_update').hide();
					$('#edit_ph_no').show();
				}
			});
	}
}



function EmailIdEdit()
{
	$('#edit_email').show(); 
	$('#edit_email').val($('#div_hidden_emailid').html());
	$('#update_email_id').show();
	$('#cancel_update_email_id').show();
	$('#edit_email_id').hide();
}

function EmailIdEditCancel()
{
	$('#edit_email').hide(); 
	//$('#edit_phone').val($('#user_name').html());
	$('#update_email_id').hide();
	$('#cancel_update_email_id').hide();
	$('#edit_email_id').show();
}


function EmailIdUpdate()
{
	$email_id = $('#edit_email').val();
	$userid = $('#profile_userdiv').html();
	if($email_id == "")
	{
		alert('Please enter an email id');
	}
	else
	{
		$.ajax({ url: 'api.php',
			 data: {function2call: 'EmailIdUpdate', email_id: $email_id, userid: $userid},
			 type: 'post',
			 //dataType: 'json',
			 success: function(output) {
				 //var res = jQuery.parseJSON(output);
					$('#div_hidden_emailid').html($('#edit_email').val());
					//$('#user_email').html($('#edit_email').val());
					if ($('#edit_email').val().length > 21)
					{
						$('#user_email').html($('#edit_email').val().substr(0, 21) + "...");
					}
					else
					{
						$('#user_email').html($('#edit_email').val());
					}
					$('#edit_email').hide(); 
				//$('#edit_phone').val($('#user_name').html());
					$('#update_email_id').hide();
					$('#cancel_update_email_id').hide();
					$('#edit_email_id').show();
					//$('#div_hidden_emailid').html();
					$full_email_id = $('#div_hidden_emailid').html();
					if ($('#user_email').html().length > 21)
					{
						$('#user_email').prop('title', $full_email_id);
					}
					else
					{
						$('#user_email').prop('title', "");
					}
				}
			});
	}
}


function GetUserAddresses()
{
	//fetch user addresses
	$userid = $('#profile_userdiv').html();
	$.ajax({ url: 'api.php',
         data: {function2call: 'GetUserAddresses', userid: $userid},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
			 var res = jQuery.parseJSON(output);
			 var html="";
			 for(var i=0;i<res.length;i++)
			 {
				 var edit_address = "edit_address" + i;
				 var delete_addr = "delete_addr" + i;
				 //create the html dynamically
				 var full_address = res[i]["Address1"] + " " + res[i]["Address2"] + " " + res[i]["City"] + " " + res[i]["State"] + " " + res[i]["Country"] + " " + res[i]["ZipCode"] + " " + res[i]["Area"];
				 html = html + "<div class='row'><div class='col-lg-2'>" + res[i]["AddressName"] + "</div><div class='col-lg-8'>" + full_address + "</div><div onmouseover='ChangeColor(" + '"' + edit_address + '"' + ", " + '"blue"' + "); CreateBoxShadow(" + '"' + edit_address + '"' + ");' onmouseout='ChangeColor(" + '"' + edit_address + '"' + ", " + '"black"' + "); DestroyBoxShadow(" + '"' + edit_address + '"' + ");' class='col-lg-1' style='cursor: pointer;' title='Edit address' onclick='EditUserAddress(" + '"' + res[i]["AddressId"] + '"' + ")" + "'" + "><i class='fa fa-pencil' id=" + edit_address + "></i></div><div onmouseover='ChangeColor(" + '"' + delete_addr + '"' + ", " + '"red"' + "); CreateBoxShadow(" + '"' + delete_addr + '"' + ");' onmouseout='ChangeColor(" + '"' + delete_addr + '"' + ", " + '"black"' + "); DestroyBoxShadow(" + '"' + delete_addr + '"' + ");' class='col-lg-1' style='cursor: pointer;' title='Delete address' onclick='DeleteUserAddress(" + '"' + res[i]["AddressId"] + '"' + ")" + "'" + "><i class='fa fa-trash' id=" + delete_addr + "></i></div></div><br></br>";
			 }
			 $('#user_row_addresses').html(html);
			}
		});
}

function CreateBoxShadow($id)
{
	$('#' + $id).css('text-shadow', '4px 4px 6px #777');
}

function DestroyBoxShadow($id)
{
	$('#' + $id).css('text-shadow', '0px 0px 0px #ffffff');
}

//graph creation

function DeleteUserAddress($addressid)
{
	$('#cartitemcontainer').show();
	$.ajax({ url: 'api.php',
         data: {function2call: 'DeleteUserAddress', addressid: $addressid},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
			 //var res = jQuery.parseJSON(output);
			 GetUserAddresses();
			 $('#cartitemcontainer').hide();
			}
		});
}


function EditUserAddress($addressid)
{
	//$('#cartitemcontainer').show();
	$.ajax({ url: 'api.php',
         data: {function2call: 'EditUserAddress', addressid: $addressid},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
			 var res = jQuery.parseJSON(output);
			 $('#new_address_container').show(); 
			 $('#midcontainerdiv').css('width', '60%'); 
			 $('#show_user_addresses').hide(); 
			 $('#rowaddresses').hide(); 
			 $('#add_division').hide();
			 
			 $('#addr1').val(res[0]["Address1"]);
			 $('#addr2').val(res[0]["Address2"]);
			 $('#area_zipcode').val(res[0]["ZipCode"]);
			 $('#areadesc').val(res[0]["Area"]);
			 $('#area_div_select').show();
			 $('#nickname').val(res[0]["AddressName"]);
			 $('#toggleval').html('1');
			 $('#user_addrid').html($addressid);
			}
		});
}

function EraseAllFields()
{
	 $('#addr1').val('');
	 $('#addr2').val('');
	 $('#area_zipcode').val('');
	 $('#areadesc').val('');
	 $('#nickname').val('');
}

function AddressCancelClick()
{
	$('#midcontainerdiv').css('width', '100%'); 
	$('#show_user_addresses').show(); 
	$('#new_address_container').hide(); 
	$('#rowaddresses').show(); 
	$('#add_division').show(); 
	GetUserAddresses(); 
	$('#area_div_select').hide(); 
	EraseAllFields();
}

function AddressAddClick()
{
	$('#new_address_container').show(); 
	$('#midcontainerdiv').css('width', '60%'); 
	$('#show_user_addresses').hide(); 
	$('#rowaddresses').hide(); 
	$('#add_division').hide();
	$('#toggleval').html('0');
	$('#user_addrid').html('');
}

function AddressSaveClick()
{
	//StoreCustomerAddresses();
	$action_val = $('#toggleval').html();
	CallToAddCustAddress($action_val)
	$('#midcontainerdiv').css('width', '100%'); 
	$('#show_user_addresses').show(); 
	$('#new_address_container').hide(); 
	$('#rowaddresses').show(); 
	$('#add_division').show(); 
	GetUserAddresses(); 
	$('#area_div_select').hide(); 
	EraseAllFields();
}

</script>

<div class='overlay' style="display:none;" id="cartitemcontainer">
	<span id="cartitemsdiv" style="width: auto;height: auto; color: beige;position: absolute;padding: 10px; margin-top: 15%;margin-left: 40%;"><img src="loader_logo.gif"></img></span>
</div>

</body>
</html> 
